<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    //


    protected $fillable = [
        'company_name','address','person_name','cell','email', 'job_category','task','salary','logo','skill'
    ];
}
