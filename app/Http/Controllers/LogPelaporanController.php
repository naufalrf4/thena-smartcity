<?php

namespace App\Http\Controllers;

use App\Models\Log_Pelaporan;
use App\Models\Pelaporan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

            try{
                $user = User::find(auth()->user()->id);
    
                $data = (object) [
                    'no_wa' => '62' . substr($user->submitter->no_telp, 1),
                    'message' => 'Laporan dengan judul ' . $pelaporan->judul_laporan . ' telah mendapat log petugas',
                ];
                dd($data);
                $response = Http::post('https://api-chatwa.azurewebsites.net?no_wa='. $data->no_wa.'&message=' . str_replace(' ', '%20', $data->message));
        
                if ($response->failed()) {
                    // // Handle error
                    // $errorMessage = $response->body();
                    // return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
                } else {
                   return redirect()->back()->with(['success' => 'Berhasil menambahkan log pelaporan']);
                }
            }catch(\Exception $e){
               return redirect()->back()->with(['success' => 'Berhasil menambahkan log pelaporan']);
            }
    
    
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
