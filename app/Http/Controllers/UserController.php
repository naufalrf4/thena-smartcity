<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function api_getuser(Request $request){
    
        if ($request->has('role')) {
            $users = User::where('role_id', $request->role)->get();
        } else {
            $users = User::with(['getRole', 'getKecamatan', 'getKelurahan'])->get();
        }

        $data = (object) [
            'users' => $users,
        ];


        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('user.data-user', ['users' => $users]);
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
                'username' => 'required',
                'no_telp' => 'required',
                'email' => 'required',
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
