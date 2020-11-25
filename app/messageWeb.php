<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messageWeb extends Model
{
    protected $fillable =['id','name','email','message','read','created_at','updated_at'];
}
