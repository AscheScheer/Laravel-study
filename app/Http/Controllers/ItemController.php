<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    public function additem()
    {
        return view('additem', ['title' => 'Tambah item']);
    }

    public function submititem(Request $request)
    {
        $request->validate([
            'titlepost' => 'required|string|max:255',
            'payload' => 'required|string',
        ]);

        $item = new Post();
        $item->titlepost = $request->titlepost;
        $item->slug = $this->generateUniqueSlug($request->titlepost);
        $item->payload = $request->payload; // Menggunakan payload sesuai field di model
        $item->save();

        return redirect()->route('admin.dashboard');
    }
private function generateUniqueSlug($titlepost)
{
    // Generate the initial slug
    $slug = Str::slug($titlepost);
    $originalSlug = $slug;
    $count = 1;

    // Check if the slug exists in the database
    while (Post::where('slug', $slug)->exists()) {
        // If exists, append the count to the slug
        $slug = "{$originalSlug}-{$count}";
        $count++;
    }

    return $slug;
}}
