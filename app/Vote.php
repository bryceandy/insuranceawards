<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /*
     * icoya -Insurance Company of the Year Award
     * miip -Most Innovative Insurance Product
     * mce -Most Compliant Entity
     * mioya -Marketing Initiative of the Year
     * ya -Young Achievers'
     */
    protected $fillable = ['name', 'icoya', 'miip', 'mce', 'mioya', 'ya'];
}
