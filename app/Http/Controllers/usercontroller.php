<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;

class usercontroller extends Controller
{
    public function index()
    {
        return view('form');
    }


    public function vali(userRequest $request){
      return $request;
   
    }













    public function data(Request $request)
    {
        // return $request;

        // return $request->all();
        // return $request->name;
        // return $request->email;
        // return $request->input("password");
        // return $request->method();
        // return $request->isMethod("post")?"nein":"ya";
        // return $request->ip();
        // return $request->url();
        // return $request->is("data")?"ok":"nein";
    }
}
