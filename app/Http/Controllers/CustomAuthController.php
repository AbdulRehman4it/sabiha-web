<?php

namespace App\Http\Controllers; 

use App\Models\User;

use Hash;

use Session;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    
    public function register(){
        return view('auth.register');
    }

    public function registerUser(Request $request){
      $request->validate([
          'name'=>'required',
          'email'=>'required|email|unique:users' ,
          'password'=>'required',
          'phone'=>'required'
      ]);

      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->phone = $request->phone;
      $res = $user->save();
      if($res) {
        return back()->with('success','Registered Successfully');
      }else  {
        return back()->with('error','Somethig Went Wrong');

      }
    }

  
 public function loginUser(Request  $request){

    $request->validate([
        
        'email'=>'required|email' ,
        'password'=>'required'
        
    ]);
$user  = User::where('email','=',$request->email)->first();
if($user){

    if(Hash::check($request->password,$user->password)){

        $request->session()->put('loginId',$user->id);
        return redirect('dashboard');
    }else{
    return back()->with('error','password not matched');

    }
}else{
    return back()->with('error','This Email is not Registered.');

}

}


    
public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
    $data  = User::where('id','=',Session::get('loginId'))->first();

        }
        return view('admin.dashboard',compact('data'));
    }
    
    public function Logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
