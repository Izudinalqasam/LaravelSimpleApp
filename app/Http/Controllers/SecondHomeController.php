<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondHomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $name = request('name');
        $myClass = "Kelas 2 SMA";
        return view('bladeexam.home', compact(['name', 'myClass']));
    }
}
