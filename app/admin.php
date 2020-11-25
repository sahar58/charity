<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PhpParser\Node\Expr\AssignOp\Mod;   

class admin extends Authenticatable// Model
{
    protected $fillable =['name','email','password','remember_token'];

protected $hidden = [
        'password'
    ];
    protected  $guard  ="admin";
}
