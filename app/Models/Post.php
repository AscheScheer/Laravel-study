<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;
    protected $table = 'content';
    protected $fillable = ['titlepost', 'slug', 'payload'];
};

// class Post
// {
//     public static function all()
//     {
//         return [
//             [
                // 'id' => 1,
                // 'titlepost' => 'test judul 1',
                // 'slug' => 'test-judul-1',
                // 'payload' => 'Ini adalah isi konten untuk artikel pertama. Konten ini memberikan informasi yang relevan dan menarik untuk dibaca.',
//             ],
//             [
//                 'id' => 2,
//                 'titlepost' => 'test judul 2',
//                 'slug' => 'test-judul-2',
//                 'payload' => 'Ini adalah isi konten untuk artikel kedua. Konten ini memberikan informasi tambahan yang bermanfaat.',
//             ],
//             [
//                 'id' => 3,
//                 'titlepost' => 'test judul 3',
//                 'slug' => 'test-judul-3',
//                 'payload' => 'Ini adalah isi konten untuk artikel ketiga. Konten ini sangat informatif dan berguna.',
//             ],
//             [
//                 'id' => 4,
//                 'titlepost' => 'test judul 4',
//                 'slug' => 'test-judul-4',
//                 'payload' => 'Ini adalah isi konten untuk artikel ketiga. Konten ini sangat informatif dan berguna.',
//             ],
//         ];
//     }
    
//     public static function find($slug){
//         $post = Arr::first(static::all(), function ($post) use ($slug) {
//             return $post['slug'] == $slug;
//         });

//         if(! $post) {
//             abort(404, 'Mau kemana?');
//         }

//         return $post;
//     }
// }
