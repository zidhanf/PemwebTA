<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
class MenuController extends Controller
{
    public function index()
    {
        return view('menu',[
            "tittle" => "Menu",
            "menu" => Menu::all()
        ]);
    }

    public function show(menu $post)
    {
        return view('post',[
            "tittle" => $post->nama,
            "post" => $post
        ]);
    }
}