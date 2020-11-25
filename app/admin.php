<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable// Model
{
    protected $fillable =['id','name','email','password','remember_token','created_at','updated_at'];

protected $hidden = [
        'password',
    ];
    protected  $guard  ="adminCK";
}
