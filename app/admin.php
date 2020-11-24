<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable =['id','name','email','password','remember_token','created_at','updated_at'];
}
