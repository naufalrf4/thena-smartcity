<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use App\Models\Pelaporan;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
            // Other roles, retrieve all users with their related data
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

    public function index()
    {
        // Get the user data based on the email from the session
        $user = User::where('id', session('user')->id)->first();

        // Count the number of reports created by the current user on each day of the week
        $dailyCounts = Pelaporan::where('user_id', session('user')->id)
            ->select(DB::raw('COUNT(*) as count'), DB::raw('DAYOFWEEK(created_at) as day_of_week'))
            ->groupBy(DB::raw('DAYOFWEEK(created_at)'))
            ->orderBy(DB::raw('DAYOFWEEK(created_at)'))
            ->pluck('count', 'day_of_week')
            ->toArray();

        // Generate an array with counts for each day of the week
        $grp1 = [];
        for ($i = 1; $i <= 7; $i++) {
            $grp1[] = isset($dailyCounts[$i]) ? $dailyCounts[$i] : 0;
        }

        // Return the view with the user data and daily counts
        return view('contacts-profile', with(['user' => $user, 'grp1' => $grp1]));
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
        //
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
        //
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

            if ($validatedData['data_password']){
                $user->password = $validatedData['data_password'];
            }

            $user->kecamatan_id = $validatedData['kecamatan_id'];
            $user->kelurahan_id = $validatedData['kelurahan_id'];
            $user->rt = $validatedData['data_rt'];
            $user->rw = $validatedData['data_rw'];
            // $user->foto_profil = $validatedData['data_foto_profil'];
    
            $user->save();
    
            return redirect()->back()->with('success', 'Data berhasil diupdate');
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
        //
    }
}
