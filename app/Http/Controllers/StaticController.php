<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        return view('home');
    }

    public function tourPage(){
        return view('tour');
    }
}
