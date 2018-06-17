<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){

        // Validator

        $inputs = $request->except('_token');

        $validator = Validator::make($inputs, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }



        //var_dump(Auth::attempt($inputs));





        // Check if user is exsists


        // Login to the user homepage
    }
}
