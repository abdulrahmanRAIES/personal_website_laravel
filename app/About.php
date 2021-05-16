<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $fillable=[
        'name','phone','email','description','resume','image'
    ];
}
