<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard-(Syndic-View)',[
            // 'bg' => 'bgorange',
            // 'bg' => 'bgorange',
            // 'bg' => 'bgorange',
        ]);
    }
}
