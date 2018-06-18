<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard(){

        $data = [];
        $data['users'] = auth()->user();
        return view('dashboard', $data);
    }
}
