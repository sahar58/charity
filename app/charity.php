<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class charity extends Model
{
    protected $fillable =['id','name','logo','email','password','address','phone','about','charity_number','admin_id','remember_token','created_at','updated_at'];
}
