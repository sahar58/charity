<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class charity_support extends Model
{
    protected $fillable =['id','charity_id','support_id','created_at','updated_at'];

}
