<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail;

class mailController extends Controller
{
    //
    public function send()
    {
       mail::send();
    }
}
