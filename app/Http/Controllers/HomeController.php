<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $name = request('name');
        $myClass = "Belajar";
    
        // Compact('name_variable') is same with ['name' => $nama_variable]
        return view('bladeexam.home', compact(['name', 'myClass']));
    }
}