<?php

namespace App\Http\Controllers;

use App\Models\Log_Pelaporan;
use App\Models\Chat;
use App\Models\Pelaporan;
use App\Models\Petugas_Diassign;
use App\Models\Roles;
use App\Models\StatusLogPelaporan;
use App\Models\StatusPenanganan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class PelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function api_nearestpelaporan(Request $request){

        try{

            $validatedData = $request->validate([
                'lat' => 'required',
                'lng' => 'required',
                'pid' => 'sometimes|nullable'
            ]);

            $lat = $validatedData['lat'];
            $lng = $validatedData['lng'];
    
            if($validatedData['pid']){
                $lap = DB::select("
                    SELECT
                        pelaporan.*,
                        status_penanganan.status,
                        status_penanganan.color,
                        name,
                        master_kecamatan.nama as kecamatan,
                        master_kelurahan.nama as kelurahan,
                        foto_profil,
                        (3959 * ACOS(
                            GREATEST(LEAST(1, 
                                COS(RADIANS(?)) * COS(RADIANS(lat_coor)) * COS(RADIANS(lng_coor) - RADIANS(?)) + 
                                SIN(RADIANS(?)) * SIN(RADIANS(lat_coor))
                            ), -1)
                        )) AS distance
                    FROM petugas_diassign
                    JOIN users ON petugas_diassign.user_id = users.id
                    JOIN pelaporan ON petugas_diassign.pelaporan_id = pelaporan.id
                    JOIN status_penanganan ON pelaporan.status_penanganan_id = status_penanganan.id
                    JOIN master_kecamatan ON pelaporan.kecamatan_id = master_kecamatan.id
                    JOIN master_kelurahan ON pelaporan.kelurahan_id = master_kelurahan.id
                    WHERE users.id = ?
                    AND (3959 * ACOS(
                        GREATEST(LEAST(1, 
                            COS(RADIANS(?)) * COS(RADIANS(lat_coor)) * COS(RADIANS(lng_coor) - RADIANS(?)) + 
                            SIN(RADIANS(?)) * SIN(RADIANS(lat_coor))
                        ), -1)
                    )) IS NOT NULL
                    ORDER BY distance
                    LIMIT 0, 20;
                ", [$lat, $lng, $lat, $validatedData['pid'], $lat, $lng, $lat, $lat, $lng, $lat]);
            
            }else{
                $lap = DB::select("
                    SELECT
                        pelaporan.*,
                        status_penanganan.status,
                        status_penanganan.color,
                        name,
                        foto_profil,
                        (3959 * ACOS(
                            GREATEST(LEAST(1, 
                                COS(RADIANS(?)) * COS(RADIANS(lat_coor)) * COS(RADIANS(lng_coor) - RADIANS(?)) + 
                                SIN(RADIANS(?)) * SIN(RADIANS(lat_coor))
                            ), -1)
                        )) AS distance
                    FROM pelaporan
                    JOIN users ON pelaporan.user_id = users.id
                    JOIN status_penanganan ON pelaporan.status_penanganan_id = status_penanganan.id
                    WHERE (3959 * ACOS(
                            GREATEST(LEAST(1, 
                                COS(RADIANS(?)) * COS(RADIANS(lat_coor)) * COS(RADIANS(lng_coor) - RADIANS(?)) + 
                                SIN(RADIANS(?)) * SIN(RADIANS(lat_coor))
                            ), -1)
                        )) IS NOT NULL
                    AND (3959 * ACOS(
                        GREATEST(LEAST(1, 
                            COS(RADIANS(?)) * COS(RADIANS(lat_coor)) * COS(RADIANS(lng_coor) - RADIANS(?)) + 
                            SIN(RADIANS(?)) * SIN(RADIANS(lat_coor))
                        ), -1)
                    )) < 7
                    ORDER BY distance
                    LIMIT 0, 20;
                    ", [$lat, $lng, $lat, $lat, $lng, $lat, $lat, $lng, $lat]);
            }
            
        
            return response()->json($lap);
        }catch(\Exception $e){

            dd($e);
            return response()->json(['message' => 'Tidak ada parameter yang diberikan'], 404);
        }
    }

    public function api_getpelaporan(Request $request){

        if($request->has('rid')){
            try{
                $role = Roles::find($request->rid);

                if(!$role){
                    return response()->json(['message' => 'Role tidak ditemukan'], 404);
                }

                $semua_laporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan']);
                $belum_ditangani = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('role_penanganan_id', NULL);
                $sedang_ditangani = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])
                                        ->where(function ($query) {
                                            $query->whereIn('status_penanganan_id', [2, 3]);
                                        });;
                $selesai = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('status_penanganan_id', 3);
                
                if ($role->level_role == 1 || $role->level_role == 2 || $role->level_role == 3) {
                    $semua_laporan_count = $semua_laporan->count();
                    $belum_ditangani_count = $belum_ditangani->count();
                    $sedang_ditangani_count = $sedang_ditangani->count();
                    $selesai_count = $selesai->count();
                } else if ($role->level_role == 5) {
                    $semua_laporan_count = $semua_laporan->where('role_penanganan_id', $role->id)->count();
                    $belum_ditangani_count = $belum_ditangani->where('role_penanganan_id', $role->id)->where('status_penanganan_id', 1)->count();
                    $sedang_ditangani_count = $sedang_ditangani->where('role_penanganan_id', $role->id)->count();
                    $selesai_count = $selesai->where('role_penanganan_id', $role->id)->count();
                } else if ($role->level_role == 6) {
                    $petugas_diassign = Petugas_Diassign::where('user_id', $request->uid)->with('pelaporan')->get();
                    $semua_laporan_count = $petugas_diassign->pluck('pelaporan')->count();
                    $belum_ditangani_count = $petugas_diassign->pluck('pelaporan')->where('status_penanganan_id', 1)->count();
                    $sedang_ditangani_count = $petugas_diassign->pluck('pelaporan')->where(function ($query) {
                        $query->whereIn('status_penanganan_id', [2, 3]);
                    })->count();
                    $selesai_count = $petugas_diassign->pluck('pelaporan')->where('status_penanganan_id', 3)->count();
                }

                if($request->has('status')){
                    if($request->status == 'semua-laporan'){
                        $pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan']);
                    }else if($request->status == 'belum-ditangani'){
                        $pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('role_penanganan_id', NULL);
                    }else if ($request->status == 'sedang-ditangani') {
                        $pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])
                            ->where(function ($query) {
                                $query->whereIn('status_penanganan_id', [2, 3]);
                            });
                    }else if($request->status == 'perlu-direview'){
                        $pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('status_penanganan_id', 3)->whereHas('log_pelaporans', function ($query) {
                            $query->where('status_log_pelaporan', 3);
                        });
                    }else if($request->status == 'selesai'){
                        $pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('status_penanganan_id', 4);
                    }
                    // $pelaporan = $pelaporan->where('status_penanganan_id', $request->status);
                }

                if($role->level_role == 2){
                    $pelaporan = $pelaporan->where('role_penanganan_id', NULL);
                } else if($role->level_role == 5){
                    $pelaporan = $pelaporan->where('role_penanganan_id', $role->id);
                } else if($role->level_role == 6){
                    $petugas_diassign = Petugas_Diassign::where('user_id', $request->uid)->with('pelaporan')->get();
                    $pelaporan2 = $petugas_diassign->pluck('pelaporan');
                    $pelaporan = $pelaporan->whereIn('id', $pelaporan2->pluck('id'));
                } else{ //role 1, 3 (admin dan walikota)
                    $pelaporan = $pelaporan;
                }


                $data = (object) [
                    'semua_laporan' => $semua_laporan_count,
                    'belum_ditangani' => $belum_ditangani_count,
                    'sedang_ditangani' => $sedang_ditangani_count,
                    'selesai' => $selesai_count,
                    'pelaporan' => $pelaporan->get(),
                ];
        
                return response()->json($data);
            }catch(\Exception $e){
                dd($e);
                return response()->json(['message' => 'Role tidak ditemukan'], 404);
            }
        }else if ($request->has('uid')) {

            $uid = $request->uid;
            $semua_laporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('user_id', $uid)->count();
            $belum_ditangani = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('user_id', $uid)->where('role_penanganan_id', NULL)->count();
            $sedang_ditangani = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])
                                ->where('user_id', $uid)
                                ->where(function ($query) {
                                    $query->whereIn('status_penanganan_id', [2, 3]);
                                })
                                ->count();
            $selesai = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('user_id', $uid)->where('status_penanganan_id', 4)->count();
    
            $data = (object) [
                'semua_laporan' => $semua_laporan,
                'belum_ditangani' => $belum_ditangani,
                'sedang_ditangani' => $sedang_ditangani,
                'selesai' => $selesai,
            ];
            
            if($request->has('status')){
                if($request->status == 'semua-laporan'){
                    $data->pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('user_id', $uid)->get();
                }else if($request->status == 'belum-ditangani'){
                    $data->pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('user_id', $uid)->where('role_penanganan_id', NULL)->get();
                }else if($request->status == 'sedang-ditangani'){
                    $data->pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('user_id', $uid)->where(function ($query) {
                        $query->whereIn('status_penanganan_id', [2, 3]);
                    })->get();
                }else if($request->status == 'perlu-direview'){
                    $data->pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('user_id', $uid)->whereHas('log_pelaporans', function ($query) {
                        $query->where('status_log_pelaporan', 3);
                    });
                }else if($request->status == 'selesai'){
                    $data->pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('user_id', $uid)->where('status_penanganan_id', 4)->get();
                }
                // $pelaporan = $pelaporan->where('status_penanganan_id', $request->status);
            }

            return response()->json($data);
        }

        return response()->json(['message' => 'Tidak ada parameter yang diberikan'], 404);
    }

    public function index(Request $request)
    {
        $status = 'Semua Laporan';

        $routeName = $request->route()->getName();
        $explodedRouteName = explode('.', $routeName);

        // Check the second segment of the route name
        if ($explodedRouteName[1] === 'belum_ditangani' || $explodedRouteName[1] === 'sedang_ditangani' || $explodedRouteName[1] === 'perlu_direview') {
            $status = ucwords(str_replace('_', ' ', $explodedRouteName[1]));
        } else if ($explodedRouteName[1] === 'selesai') {
            $status = ucwords($explodedRouteName[1]);
        }

        return view('pelaporan.data-pelaporan', ['status' => $status]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try{
        $validatedData = $request->validate([
            'judul_laporan' => 'required',
            'deskripsi_laporan' => 'required',
            'alamat_kejadian' => 'required',
            'lat_coor' => 'nullable',
            'lng_coor' => 'nullable',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'tanggal_kejadian' => 'required',
            'foto_kejadian' => 'nullable|sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto_kejadian')) {
            $file = $request->file('foto_kejadian');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/foto_kejadian', $filename);
            $validatedData['foto_kejadian'] = $filename;
        }

        $Pelaporan = Pelaporan::create([
            'user_id' => auth()->user()->id,
            'status_penanganan_id' => 1,
            'lat_coor' => $validatedData['lat_coor'],
            'lng_coor' => $validatedData['lng_coor'],
            'nama_laporan' => $validatedData['judul_laporan'],
            'deskripsi_laporan' => $validatedData['deskripsi_laporan'],
            'alamat_kejadian' => $validatedData['alamat_kejadian'],
            'kecamatan_id' => $validatedData['kecamatan_id'],
            'kelurahan_id' => $validatedData['kelurahan_id'],
            'tgl_dibuat' => $validatedData['tanggal_kejadian'],
            'foto' => $validatedData['foto_kejadian'],
        ]);

        try{
            $user = User::find(auth()->user()->id);

            $data = (object) [
                'no_wa' => '62' . substr($user->no_telp, 1),
                'message' => 'Laporan baru telah dibuat dengan judul ' . $validatedData['judul_laporan'] . ' oleh ' . auth()->user()->name . '. Silahkan cek di aplikasi untuk detailnya.',
            ];

            
            $response = Http::post('http://127.0.0.1:3000?no_wa='. $data->no_wa.'&message=' . str_replace(' ', '%20', $data->message));
    
            if ($response->failed()) {
                dd($response);
                // // Handle error
                // $errorMessage = $response->body();
                // return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
            } else {
                return redirect()->route('pelaporan.index')->with('success', 'Laporan berhasil dibuat');
            }
        }catch(\Exception $e){
            return redirect()->route('pelaporan.index')->with('success', 'Laporan berhasil dibuat');
        }
        
       } catch (ValidationException $e) {
            dd($e->getMessage());
            $errors = $e->validator->errors()->all();

            // You can return these errors to the view or handle them as needed
            return back()->withErrors($errors)->withInput();
            // return redirect()->route('pegawai.index')->withErrors('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try{
            // $chats = Chat::with(['sender'])->where('pelaporan_id', $id)->get();
            $pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan', 'rolePenanganan', 'chat'])->find($id);
            $petugas_diassign = Petugas_Diassign::where('pelaporan_id', $id)->with('user')->get();
            $log_pelaporan = Log_Pelaporan::where('pelaporan_id', $id)->with('statusLog', 'user')->get();

            if(!$pelaporan){
                return redirect()->route('pelaporan.index')->with('error', 'Laporan tidak ditemukan');
            }

            if(session('role')->level_role == 1){
                $status_penanganan = StatusPenanganan::all();
                $dinas = Roles::where('level_role', 5)->get();
                
                if($pelaporan->role_penanganan_id){
                    $petugas_role = Roles::where('dep_role', $pelaporan->role_penanganan_id)->first();
                    $petugas = User::where('role_id', $petugas_role->id)
                        ->whereNotExists(function ($query) use ($id) {
                            $query->select(DB::raw(1))
                                ->from('petugas_diassign')
                                ->whereRaw('petugas_diassign.user_id = users.id')
                                ->where('pelaporan_id', $id);
                        })
                        ->select('id', 'name', 'username', 'no_telp', 'email', 'role_id', 'kecamatan_id', 'kelurahan_id', 'rt', 'rw', 'foto_profil')
                        ->get();
                }else{
                    $petugas = [];
                }

                $status_log = StatusLogPelaporan::all();
                
                return view('pelaporan.detail-pelaporan', ['pelaporan' => $pelaporan, 'petugas_diassign' => $petugas_diassign,  'log_pelaporan' => $log_pelaporan, 'status_penanganan' => $status_penanganan, 'dinas' => $dinas, 'petugas' => $petugas, 'status_log' => $status_log, 'chats' => $pelaporan->chat]);
            }

            if(session('role')->level_role == 2){
                $status_penanganan = StatusPenanganan::all();
                $dinas = Roles::where('level_role', 5)->get();
                return view('pelaporan.detail-pelaporan', ['pelaporan' => $pelaporan, 'petugas_diassign' => $petugas_diassign,  'log_pelaporan' => $log_pelaporan, 'status_penanganan' => $status_penanganan, 'dinas' => $dinas, 'chats' => $pelaporan->chat]);
            }

            if(session('role')->level_role == 5){
                $status_penanganan = StatusPenanganan::where('id', '>=', 2)->get();
                $petugas_role = Roles::where('dep_role', session('role')->id)->first();
                $petugas = User::where('role_id', $petugas_role->id)
                    ->whereNotExists(function ($query) use ($id) {
                        $query->select(DB::raw(1))
                            ->from('petugas_diassign')
                            ->whereRaw('petugas_diassign.user_id = users.id')
                            ->where('pelaporan_id', $id);
                    })
                    ->select('id', 'name', 'username', 'no_telp', 'email', 'role_id', 'kecamatan_id', 'kelurahan_id', 'rt', 'rw', 'foto_profil')
                    ->get();

                $status_log = StatusLogPelaporan::all();

                return view('pelaporan.detail-pelaporan', ['pelaporan' => $pelaporan, 'petugas_diassign' => $petugas_diassign, 'log_pelaporan' => $log_pelaporan, 'status_penanganan' => $status_penanganan, 'petugas' => $petugas, 'status_log' => $status_log, 'chats' => $pelaporan->chat]);
            }

            if(session('role')->level_role == 6){
                $status_log = StatusLogPelaporan::all();
                return view('pelaporan.detail-pelaporan', ['pelaporan' => $pelaporan, 'petugas_diassign' => $petugas_diassign, 'log_pelaporan' => $log_pelaporan, 'status_log' => $status_log, 'chats' => $pelaporan->chat]);
                
            }

            return view('pelaporan.detail-pelaporan', ['pelaporan' => $pelaporan, 'petugas_diassign' => $petugas_diassign, 'log_pelaporan' => $log_pelaporan, 'chats' => $pelaporan->chat]);
        } catch (\Exception $e) {
            return redirect()->route('pelaporan.index')->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(session('role')->level_role == 1){
            $request->validate([
                'nama_laporan' => 'nullable',
                'deskripsi_laporan' => 'nullable',
                'alamat_kejadian' => 'nullable',
                'kecamatan_id' => 'nullable',
                'kelurahan_id' => 'nullable',  
                'foto' => 'nullable|sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status_penanganan_id' => 'nullable',
                'estimasi_selesai' => 'nullable',
                'role_penanganan_id' => 'nullable',
            ]);
        }
        if(session('role')->level_role == 4){
            $request->validate([
                'nama_laporan' => 'required',
                'deskripsi_laporan' => 'required',
                'alamat_kejadian' => 'required',
                'kecamatan_id' => 'required',
                'kelurahan_id' => 'required',  
                'foto' => 'nullable|sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }

        if(session('role')->level_role == 2){
            $request->validate([
                'status_penanganan_id' => 'required',
                'role_penanganan_id' => 'required',
            ]);
        }

        if(session('role')->level_role == 5){
            $request->validate([
                'status_penanganan_id' => 'required',
                'estimasi_selesai' => 'required',
                'role_penanganan_id' => 'required',
            ]);
        }
        
        try{
            $pelaporan = Pelaporan::find($id);

            if(!$pelaporan){
                return redirect()->route('pelaporan.index')->with('error', 'Laporan tidak ditemukan');
            }

            if(session('role')->level_role == 1){
                if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $file->storeAs('public/foto_kejadian', $filename);
                    $pelaporan->foto = $filename;
                }
    
                $pelaporan->nama_laporan = $request->nama_laporan ?? $pelaporan->nama_laporan;
                $pelaporan->deskripsi_laporan = $request->deskripsi_laporan ?? $pelaporan->deskripsi_laporan;
                $pelaporan->alamat_kejadian = $request->alamat_kejadian ?? $pelaporan->alamat_kejadian;
                $pelaporan->kecamatan_id = $request->kecamatan_id ?? $pelaporan->kecamatan_id;
                $pelaporan->kelurahan_id = $request->kelurahan_id ?? $pelaporan->kelurahan_id;
                $pelaporan->save();

                if($request->has('status_penanganan_id')){
                    $pelaporan->status_penanganan_id = $request->status_penanganan_id;
                    $pelaporan->save();
                }

                if($request->has('estimasi_selesai')){
                    $pelaporan->estimasi_selesai = $request->estimasi_selesai;
                    $pelaporan->save();
                }

                if($request->has('role_penanganan_id')){
                    $pelaporan->role_penanganan_id = $request->role_penanganan_id;
                    $pelaporan->save();
                }
            }

            if(session('role')->level_role == 4){
                if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $file->storeAs('public/foto_kejadian', $filename);
                    $pelaporan->foto = $filename;
                }
    
                $pelaporan->nama_laporan = $request->nama_laporan;
                $pelaporan->deskripsi_laporan = $request->deskripsi_laporan;
                $pelaporan->alamat_kejadian = $request->alamat_kejadian;
                $pelaporan->kecamatan_id = $request->kecamatan_id;
                $pelaporan->kelurahan_id = $request->kelurahan_id;
                $pelaporan->save();
            }

            if(session('role')->level_role == 2){
                $pelaporan->status_penanganan_id = $request->status_penanganan_id;
                $pelaporan->role_penanganan_id = $request->role_penanganan_id;
                $pelaporan->save();

                try{
                    $user = User::find(auth()->user()->id);
        
                    $data = (object) [
                        'no_wa' => '62' . substr($user->no_telp, 1),
                        'message' => 'Laporan dengan judul ' . $pelaporan->nama_laporan . ' telah diupdate oleh Dispatcher, Silahkan cek di aplikasi untuk detailnya.',
                    ];
                    
                    $response = Http::post('http://127.0.0.1:3000?no_wa='. $data->no_wa.'&message=' . str_replace(' ', '%20', $data->message));
                    if ($response->failed()) {
                        // // Handle error
                        // $errorMessage = $response->body();
                        // return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
                    } else {
                       return redirect()->back()->with('success', 'Laporan berhasil diupdate');
                    }
                }catch(\Exception $e){
                   return redirect()->back()->with('success', 'Laporan berhasil diupdate');
                }
            }

            if(session('role')->level_role == 5){
                $pelaporan->status_penanganan_id = $request->status_penanganan_id;
                $pelaporan->estimasi_selesai = $request->estimasi_selesai;
                $pelaporan->save();

                try{
                    $user = User::find(auth()->user()->id);
        
                    $data = (object) [
                        'no_wa' => '62' . substr($user->no_telp, 1),
                        'message' => 'Laporan dengan judul ' . $pelaporan->nama_laporan . ' telah diupdate oleh Dinas, Silahkan cek di aplikasi untuk detailnya.',
                    ];
                    
                    $response = Http::post('http://127.0.0.1:3000?no_wa='. $data->no_wa.'&message=' . str_replace(' ', '%20', $data->message));
            
                    if ($response->failed()) {
                        // // Handle error
                        // $errorMessage = $response->body();
                        // return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
                    } else {
                       return redirect()->back()->with('success', 'Laporan berhasil diupdate');
                    }
                }catch(\Exception $e){
                   return redirect()->back()->with('success', 'Laporan berhasil diupdate');
                }
            }

            return redirect()->back()->with('success', 'Laporan berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
