<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminsController extends Controller
{
  public function index()
  {
    $id=1;
      $admins=DB::table('admins')->get();

      return view("view",["admins"=>$admins,"id"=>$id]);
  }

  public function form()
  {
    return view("form_db");
  }
}
