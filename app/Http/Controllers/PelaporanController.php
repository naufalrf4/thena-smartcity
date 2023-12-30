<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use Illuminate\Http\Request;
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

    public function api_getpelaporan(Request $request){

        $semua_laporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->get();
        $belum_ditangani = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('status_penanganan_id', 1)->count();
        $sedang_ditangani = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('status_penanganan_id', 2)->count();
        $selesai = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('status_penanganan_id', 3)->count();

        $data = (object) [
            'semua_laporan' => $semua_laporan,
            'belum_ditangani' => $belum_ditangani,
            'sedang_ditangani' => $sedang_ditangani,
            'selesai' => $selesai,
        ];
        
        if($request->has('status')){
            $data->pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->where('status_penanganan_id', $request->status)->get();
        }else{
            $data->pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan'])->get();
        }

        return response()->json($data);
    }

    public function index(Request $request)
    {
        $status = 'Semua Laporan';

        $routeName = $request->route()->getName();
        $explodedRouteName = explode('.', $routeName);

        // Check the second segment of the route name
        if ($explodedRouteName[1] === 'belum_ditangani' || $explodedRouteName[1] === 'sedang_ditangani') {
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
            'nama_laporan' => $validatedData['judul_laporan'],
            'deskripsi_laporan' => $validatedData['deskripsi_laporan'],
            'alamat_kejadian' => $validatedData['alamat_kejadian'],
            'kecamatan_id' => $validatedData['kecamatan_id'],
            'kelurahan_id' => $validatedData['kelurahan_id'],
            'tgl_dibuat' => $validatedData['tanggal_kejadian'],
            'foto' => $validatedData['foto_kejadian'],
        ]);

        return redirect()->route('pelaporan.index')->with('success', 'Laporan berhasil dibuat');
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
            $pelaporan = Pelaporan::with(['submitter', 'kecamatan', 'kelurahan', 'statusPenanganan', 'rolePenanganan'])->find($id);

            if(!$pelaporan){
                return redirect()->route('pelaporan.index')->with('error', 'Laporan tidak ditemukan');
            }

            return view('pelaporan.detail-pelaporan', ['pelaporan' => $pelaporan]);
        } catch (\Exception $e) {
            return redirect()->route('pelaporan.index')->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
                'status_laporan' => 'required',
                'role_penanganan_id' => 'required',
            ]);
        }

        if(session('role')->level_role == 5){
            $request->validate([
                'status_laporan' => 'required',
                'estimasi_selesai' => 'required',
            ]);
        }
        
        try{
            $pelaporan = Pelaporan::find($id);

            if(!$pelaporan){
                return redirect()->route('pelaporan.index')->with('error', 'Laporan tidak ditemukan');
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
                $pelaporan->status_penanganan_id = $request->status_laporan;
                $pelaporan->role_penanganan_id = $request->role_penanganan_id;
                $pelaporan->save();
            }

            if(session('role')->level_role == 5){
                $pelaporan->status_penanganan_id = $request->status_laporan;
                $pelaporan->estimasi_selesai = $request->estimasi_selesai;
                $pelaporan->save();
            }

            return redirect()->route('pelaporan.index')->with('success', 'Laporan berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->route('pelaporan.index')->with('error', $e->getMessage());
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
