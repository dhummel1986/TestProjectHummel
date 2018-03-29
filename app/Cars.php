<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model

{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Make', 'Model', 'Year',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];
}
