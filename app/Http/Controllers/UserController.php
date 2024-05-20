<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function api_getuser(Request $request){

        $role = Roles::find($request->rid);

        // Check if the logged-in user has role_id = 5
        if ($role->level_role == 5) {
            // Logged-in user has role_id = 5, filter users with leve_role = 6
            $users = User::whereHas('getRole', function ($query) use ($role) {
                $query->where('level_role', 6);
                $query->where('dep_role', $role->id);
            })->with(['getRole', 'getKecamatan', 'getKelurahan'])->get();
        } else {
            if ($request->has('role')) {
                $users = User::where('role_id', $request->role)->get();
            } else {
                $users = User::with(['getRole', 'getKecamatan', 'getKelurahan'])->get();
            }
        }

        $data = (object) [
            'users' => $users,
            'total_dispatcher' => User::whereHas('getRole', function ($query) use ($role) {
                $query->where('level_role', 2);
            })->count(),
            'total_walikota' => User::whereHas('getRole', function ($query) use ($role) {
                $query->where('level_role', 3);
            })->count(),
            'total_warga' => User::whereHas('getRole', function ($query) use ($role) {
                $query->where('level_role', 4);
            })->count(),
            'total_dinas' => User::whereHas('getRole', function ($query) use ($role) {
                $query->where('level_role', 5);
            })->count(),
            'total_petugas_dinas' => User::whereHas('getRole', function ($query) use ($role) {
                $query->where('level_role', 6);
            })->count(),
            'total_user' => $users->count(),
            
        ];

        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        if (session('role')->level_role == 1 ){
            
            $role = Roles::all();

        } else if (session('role')->level_role == 5) {
            
            $role = Roles::where('id', session('role')->id)->orWhere('dep_role', session('role')->id)->get();

        }


        return view('user.data-user', ['users' => $users, 'role' => $role]);
        
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
                'name' => 'required',
                'username' => 'required|unique:users,username',
                'no_telp' => 'required|unique:users,no_telp',
                'email' => 'required|unique:users,email',
                'role_id' => 'required',
                'password' => 'required',
                'kecamatan_id' => 'required',
                'kelurahan_id' => 'required',
                'rt' => 'required',
                'rw' => 'required',
                'foto_profil' => 'nullable|sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);            
    
            if ($request->hasFile('foto_profil')) {
                $file = $request->file('foto_profil');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/foto_profil', $filename);
                $validatedData['foto_profil'] = $filename;
            }
    
            $User = User::create([
                'user_id' => auth()->user()->id,
                'name' => $validatedData['name'],
                'username' => $validatedData['username'],
                'no_telp' => $validatedData['no_telp'],
                'email' => $validatedData['email'],
                'role_id' => $validatedData['role_id'],
                'password' => $validatedData['password'],
                'kecamatan_id' => $validatedData['kecamatan_id'],
                'kelurahan_id' => $validatedData['kelurahan_id'],
                'rt' => $validatedData['rt'],
                'rw' => $validatedData['rw'],
                'foto_profil' => $validatedData['foto_profil'],
            ]);
    
            return redirect()->route('user.index')->with('success', 'Data user berhasil dibuat');
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
        try {
            $user = User::with(['getRole', 'getKecamatan', 'getKelurahan'])->find($id);
            $roles = Roles::all();
    
            if (!$user) {
                return redirect()->route('user.index')->with('error', 'User tidak ditemukan');
            }
    
            return view('user.detail-user', compact('user', 'roles'));
        } catch (\Exception $e) {
            return redirect()->route('user.index')->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $user = User::find($id);
    
            if (!$user) {
                return redirect()->route('user.index')->with('error', 'User tidak ditemukan');
            }
    
            $validatedData = $request->validate([
                'data_nama' => 'required',
                'data_username' => 'required',
                'data_no_telp' => 'required',
                'data_email' => 'required',
                'data_role' => 'required',
                'data_password' => 'sometimes|nullable',
                'kecamatan_id' => 'required',
                'kelurahan_id' => 'required',
                'data_rt' => 'required',
                'data_rw' => 'required',
                'data_foto_profil' => 'nullable|sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Your revision starts here
            // $roleName = $validatedData['data_role'];
            // $role = Roles::where('name', $roleName)->first();

            // if ($role) {
            //     $user->role_id = $role->id;
            // } else {
            //     // Handle the case where the role with the given name doesn't exist
            //     return redirect()->back()->with('error', 'Role tidak valid');
            // }
    
            if (array_key_exists('data_foto_profil', $validatedData)) {
                // Handle the file upload logic
                if ($request->hasFile('data_foto_profil')) {
                    $file = $request->file('data_foto_profil');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $file->storeAs('public/foto_profil', $filename);
                    $user->foto_profil = $filename;
                }
            }
            
            $user->name = $validatedData['data_nama'];
            $user->username = $validatedData['data_username'];
            $user->no_telp = $validatedData['data_no_telp'];
            $user->email = $validatedData['data_email'];
            $user->role_id = $validatedData['data_role'];

            if ($validatedData['data_password']){
                $user->password = $validatedData['data_password'];
            }

            $user->kecamatan_id = $validatedData['kecamatan_id'];
            $user->kelurahan_id = $validatedData['kelurahan_id'];
            $user->rt = $validatedData['data_rt'];
            $user->rw = $validatedData['data_rw'];
            // $user->foto_profil = $validatedData['data_foto_profil'];
    
            $user->save();
    
            return redirect()->back()->with('success', 'Laporan berhasil diupdate');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::find($id);

            if (!$user) {
                return redirect()->route('user.index')->with('error', 'User not found');
            }

            // Check if there is no associated record in the Pelaporan model
            $pelaporanCount = Pelaporan::where('user_id', $user->id)->count();

            if ($pelaporanCount > 0) {
                return redirect()->route('user.index')->with('error', 'Gagal menghapus data. User masih memiliki data pelaporan!');
            }

            // If no associated records in Pelaporan, proceed with deletion
            $user->delete();

            return redirect()->route('user.index')->with('success', 'User berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('user.index')->with('error', $e->getMessage());
        }
    }
}
