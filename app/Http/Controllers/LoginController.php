<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    
    public function register(){
        return view('auth.register');
    }
    public function create(Request $request){
        // dd($request->all());
        // return redirect('auth.register');
        $user = new User();
       
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make( $request->password);
        $user->phone = $request->phone;
        $user->save();


        return redirect('login')->with('success','Registered Successfully');
    }


    

}
