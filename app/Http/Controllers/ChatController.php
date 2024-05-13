<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Roles;
use App\Models\Pelaporan;
use Illuminate\Validation\ValidationException;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function api_getchat(Request $request){

        
    }

    public function index()
    {
        
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
        try {
            $validatedData = $request->validate([
                'pelaporan_id' => 'required', // Assuming you want to associate the chat with a pelaporan
                'chat' => 'required',
            ]);
    
            $chat = Chat::create([
                'user_id' => auth()->user()->id,
                'pelaporan_id' => $validatedData['pelaporan_id'],
                'sender_id' => auth()->user()->id,
                'chat' => $validatedData['chat'],
            ]);
    
            return redirect()->back()->with('success', 'Pesan berhasil terkirim');
        } catch (ValidationException $e) {
            dd($e->getMessage());
            $errors = $e->validator->errors()->all();
    
            return back()->withErrors($errors)->withInput();
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
