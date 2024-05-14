<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/terbaru');
        
        if ($response->successful()) {
            $articles = $response->json()['data']['posts'];
            // Slice the array to limit to 9 articles
            $articles = array_slice($articles, 0, 9);
        } else {
            $articles = [];
        }

        return view('news', compact('articles'));
    }
}
