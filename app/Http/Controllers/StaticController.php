<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){

        $text1 = "<i>Home page is herle</i>";
        return view('home', compact('text1'));
    }

    public function tourPage(){


        return view('tour');
    }
}
