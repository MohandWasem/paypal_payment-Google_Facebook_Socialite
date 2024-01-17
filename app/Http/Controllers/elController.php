<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class elController extends Controller
{
   public function index()
   {
    // return admin::all();
    // return admin::where("id",2)->get();

    // return admin::find(1)->phone;

    return admin::where("id",2)->with("phone")->get();
   }
}
