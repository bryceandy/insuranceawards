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
        'verified' => 'bool',
    ];

    public $fillable = ['ip', 'icoya', 'miip', 'yaa1', 'yaa2', 'iboya', 'iacoya', 'csra', 'verified'];
}
