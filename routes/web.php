<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;


Route::get('/',function (){

   $blog=App\Blog::find(1);
   $blog->increment('viewer');
   dd($blog);
});
