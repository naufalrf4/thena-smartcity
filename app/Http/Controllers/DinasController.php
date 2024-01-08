<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use App\Models\User;
use App\Models\Pelaporan;
use App\Models\Roles;

class DinasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function api_getdinas(Request $request){
        $roles = Roles::where('level_role', 5)->get();
        $total_dinas = Roles::where('level_role', 5)->count();

        $data = (object) [
            'roles' => $roles, 
            'total_dinas' => $total_dinas
        ];

        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Roles::all();
        $total_dinas = Roles::where('level_role', 5)->count();

        return view('dinas.data-dinas', ['roles' => $roles, 'total_dinas' => $total_dinas]);
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
            ]);
    
            $Roles = Roles::create([
                'user_id' => auth()->user()->id,
                'name' => $validatedData['name'],
                'level_role' => 5
            ]);
            
            $Petugas = Roles::create([
                'user_id' => auth()->user()->id,
                'name' => "Petugas " . $validatedData['name'],
                'level_role' => 6,
                'dep_role' => $Roles->id
            ]);

            return redirect()->route('dinas.index')->with('success', 'Data dinas berhasil dibuat!');
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
        $role = Roles::findOrFail($id);

        return response()->json(['id' => $role->id, 'name' => $role->name]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
            ]);
    
            $role = Roles::findOrFail($id);
            $role->update(['name' => $validatedData['name']]);
    
            $petugas = Roles::where('dep_role', $role->id)->first();
            if ($petugas) {
                $petugas->update(['name' => "Petugas " . $validatedData['name']]);
            }

            return redirect()->route('dinas.index')->with('success', 'Data dinas berhasil diubah!');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
    
            // You can return these errors to the view or handle them as needed
            return back()->withErrors($errors)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $role = Roles::findOrFail($id);

            $associatedPelaporan = Pelaporan::where('role_penanganan_id', $role->id)->exists();
            
            if ($associatedPelaporan) {
                return redirect()->route('dinas.index')->with('error', 'Data dinas tidak dapat dihapus! Terdapat pelaporan yang menggunakan role dinas pada data ini.');
            }

            $usersWithRole = User::where('role_id', $role->id)->exists();

            if ($usersWithRole) {
                return redirect()->route('dinas.index')->with('error', 'Data dinas tidak dapat dihapus! Terdapat user yang menggunakan role dinas pada data ini.');
            }
    
            try {
                $role->petugas()->delete();
            } catch (QueryException $e) {
                // Handle the error if unable to delete petugas records
                return redirect()->route('dinas.index')->with('error', 'Data dinas tidak dapat dihapus! Terdapat user yang menggunakan role petugas dinas pada data ini.');
            }

            $role->delete();
    
            return redirect()->route('dinas.index')->with('success', 'Data dinas berhasil dihapus!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('dinas.index')->with('error', 'Data dinas tidak ditemukan.');
        }
    }
}
