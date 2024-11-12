<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;   
use App\Models\User;   

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah artikel di tabel `content`
        $jumlahArtikel = Post::count();
        $jumlahAdmin = User::count();

        // Mengirim data ke view dashboard
        return view('dashboard', [
            'title' => 'Dashboard',
            'jumlahArtikel' => $jumlahArtikel,
            'jumlahAdmin' => $jumlahAdmin,
        ]);

        
    }

    
}
