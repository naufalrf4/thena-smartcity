<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonies = [
            [
                'name' => 'John Doe',
                'role' => 'CEO',
                'avatar' => 'build/images/images-landing/review/1.png',
                'testimonial' => 'Semapor sangat membantu dalam melaporkan masalah-masalah di sekitar kota. Saya sangat merekomendasikan aplikasi ini kepada semua orang.',
            ],
            [
                'name' => 'Jane Smith',
                'role' => 'Designer',
                'avatar' => 'build/images/images-landing/review/2.png',
                'testimonial' => 'Saya terkesan dengan antarmuka yang ramah pengguna dan kemudahan penggunaan Semapor. Sangat membantu saya untuk melaporkan masalah secara cepat.',
            ],
            [
                'name' => 'Michael Johnson',
                'role' => 'Engineer',
                'avatar' => 'build/images/images-landing/review/3.png',
                'testimonial' => 'Dengan Semapor, saya bisa melaporkan masalah-masalah infrastruktur dengan mudah. Sistem pelaporannya sangat efisien dan memudahkan komunikasi dengan pihak berwenang.',
            ],
            [
                'name' => 'Michael Johnson',
                'role' => 'Engineer',
                'avatar' => 'build/images/images-landing/review/4.png',
                'testimonial' => 'Dengan Semapor, saya bisa melaporkan masalah-masalah infrastruktur dengan mudah. Sistem pelaporannya sangat efisien dan memudahkan komunikasi dengan pihak berwenang.',
            ],
            [
                'name' => 'Michael Johnson',
                'role' => 'Engineer',
                'avatar' => 'build/images/images-landing/review/5.png',
                'testimonial' => 'Dengan Semapor, saya bisa melaporkan masalah-masalah infrastruktur dengan mudah. Sistem pelaporannya sangat efisien dan memudahkan komunikasi dengan pihak berwenang.',
            ],
        ];
    
        return view('home', compact('testimonies'));
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
