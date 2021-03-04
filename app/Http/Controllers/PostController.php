<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pegawai;
class PostController extends Controller
{

    public function index()
    {
            // mengambil data pegawai
            $pegawai = Pegawai::all();
        
            // mengirim data pegawai ke view pegawai
            return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function show($slug)
    {
        return view('posts.show', ['post' => Post::getBySlug($slug)]);
    }
}
