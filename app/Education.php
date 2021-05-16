<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $fillable=[
        'title1','title2','description','start','end'
    ];
    protected $attributes = [
        'description' => '',
    ];
}
