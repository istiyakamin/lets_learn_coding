<?php

namespace App\Http\Controllers;



use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StaticController extends Controller
{
    public function index(){

        $text1 = "<i>Home page is herle</i>";
        return view('home', compact('text1'));
    }

    public function tourPage(){


        return view('tour');
    }

    public function registration(Request $request){


        // get all inputs

        $validator = $this->validate($request, [
            'email' => 'required|email',
            'username' => 'required|min:6',
            'password' => 'required|min:6',
            'profile_photo' => 'required|image|max:10240'
        ]);



        $profile_photo = $request->file('profile_photo');
        $path = $profile_photo->store('profile_photo');


        $db = User::create([
            'email'=> trim($request->input('email')),
            'username'=> trim($request->input('username')),
            'password'=> bcrypt($request->input('password')),
            'profile_photo'=>$path,

        ]);

        if($db){
            session()->flash('message', 'You have successfully submitted you data');
            return redirect()->back();
        }


    }

    public function showAllData(){

        $all_users = User::all();


        return view('profiles', compact('all_users'));
    }

    public function login(){
        return view('login');
    }
}
