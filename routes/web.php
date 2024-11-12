<?php

use App\Http\Controllers\AuthController;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;



Route::get('/', function () {
    return view('welcome', [
        'title' => 'Welcome!',
        'posts' => Post::all(),
    ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Tentang Kami']);
});


Route::get('/items/{slug}', function ($slug) {
    // Cari post berdasarkan slug
    $post = Post::where('slug', $slug)->first();

    // Jika post tidak ditemukan, tampilkan halaman 404
    if (!$post) {
        abort(404);
    }

    return view('post', [
        'title' => $post->titlepost,
        'post' => $post
    ]);
});


Route::get('/account/login', [AuthController::class, 'showlogin'])->name('show.login');
Route::post('/account/login/submit', [AuthController::class, 'submitlogin'])->name('submit.login');

Route::middleware('auth')->group(function () {
    Route::get('/account/register', [AuthController::class, 'showregister'])->name('show.register');
    Route::post('/account/register/submit', [AuthController::class, 'submitregister'])->name('submit.register');

    Route::get('/admin/dashboard', function () {
        return view('dashboard', ['title' => 'Dashboard']);
    })->name('admin.dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/item/additem', [ItemController::class, 'additem'])->name('additem');
    Route::post('/item/submititem', [ItemController::class, 'submititem'])->name('submititem');
});
