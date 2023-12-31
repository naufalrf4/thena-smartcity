<?php

namespace App\Http\Controllers;

use App\Models\Petugas_Diassign;
use Illuminate\Http\Request;

class PetugasDiassignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'newpetugas' => 'required',
            'newpetugas.*' => 'required',
        ]);


        foreach($validatedData['newpetugas'] as $petugas) {
            $petugas_diassign = new Petugas_Diassign();
            $petugas_diassign->user_id = $petugas;
            $petugas_diassign->pelaporan_id = $id;
            $petugas_diassign->save();
        }

        return redirect()->back()->with('success', 'Petugas berhasil diassign');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resource = Petugas_Diassign::findOrFail($id);

        // Check if the resource was found
        if ($resource) {
            // Delete the resource
            $resource->delete();

            // Optionally, you can return a success message or redirect to a specific route
            return redirect()->back()->with('success', 'Resource deleted successfully');
        }

        // If the resource was not found, handle the situation (e.g., show an error message)
        return redirect()->back()->with('error', 'Resource not found');
    }
}
