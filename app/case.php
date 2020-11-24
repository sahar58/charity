<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class case extends Model
{
    protected $fillable =['Nid','name','email','password','phone','address','salary','birth_date','children_number','marital_status','monthly_treatment','rent','private_account','notes','remember_token','created_at','updated_at'];
}
