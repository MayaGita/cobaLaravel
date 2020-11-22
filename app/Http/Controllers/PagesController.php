<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function about(){
        $nama= 'Lee Jeno';
        return view('about',['nama' => $nama]);
    }
}