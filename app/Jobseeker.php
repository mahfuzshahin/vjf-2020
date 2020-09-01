<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{
    //
    protected $fillable = [
        'name','address','city','cell', 'email','category','experience','work_home','device','internet','','resume','skill',
    ];
    
}
