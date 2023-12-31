<?php

namespace App\Http\Controllers;

use App\Models\Log_Pelaporan;
use App\Models\Pelaporan;
use Illuminate\Http\Request;

class LogPelaporanController extends Controller
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
        try{
            $validatedData = $request->validate([
                'status_log' => 'required',
                'keterangan' => 'required',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
    
            $pelaporan = Pelaporan::find($id);
            if(!$pelaporan) {
                return redirect()->back()->with(['error' => 'Data tidak ditemukan']);
            }
    
            $logpelaporan = new Log_Pelaporan();
            $logpelaporan->user_id = $request->user()->id;
            $logpelaporan->status_log_pelaporan = $validatedData['status_log'];
            $logpelaporan->pelaporan_id = $pelaporan->id;
            $logpelaporan->keterangan_log = $validatedData['keterangan'];
    
            if($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/log_pelaporan', $filename);
                $logpelaporan->foto = $filename;
            }
    
            $logpelaporan->save();
    
    
            return redirect()->back()->with(['success' => 'Berhasil menambahkan log pelaporan']);
        }catch(\Exception $e) {
            dd($e);
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $logPelaporan = Log_Pelaporan::findOrFail($id);
            $logPelaporan->delete();
            
            // Optionally, return a success response or redirect to a route
            return redirect()->back()->with('success', 'Log Pelaporan deleted successfully');
        } catch (\Exception $e) {
            // Handle any exceptions or errors during deletion
            return redirect()->back()->with('error', 'Failed to delete Log Pelaporan');
        }
    }
}
