<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SeferxController extends Controller
{
  public function index()
  {
      $data=['name'=>'sefer','surname'=>'subaşı','info'=>["age"=>"34"]];
      return view('index',$data);
  }
}
