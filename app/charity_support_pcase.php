<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class charity_support_pcase extends Model
{
    protected $fillable =['id','charity_id','support_id','case_id','status','notes','start_Date','created_at','updated_at'];

}
