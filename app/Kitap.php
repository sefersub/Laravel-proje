<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kitap extends Model
{
    //
    protected $table="kitap";
    public $timestamps=false;
    protected $guarded=[];
}
