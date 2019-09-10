<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voters extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'verified' => 'boolean'
    ];

    protected $fillable = ['ip', 'icoya', 'miip', 'verified'];

    protected $table = 'voters';


}
