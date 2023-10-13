<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LangController extends Controller
{
     //
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('home.homepage');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
   
    
    // Redirect back with the lang variable in the URL and a new variable
    return redirect()->back()->with(['lang' => $request->lang,]);
    }

    
}
