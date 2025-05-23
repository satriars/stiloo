<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengembalikan view home.blade.php di folder resources/views
        return view('home');
    }
}