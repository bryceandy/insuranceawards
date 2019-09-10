<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /**
     * icoya - Insurance Company of the Year Award
     * miip - Most Innovative Insurance Product
     */
    protected $fillable = ['name', 'icoya', 'miip', 'category'];

    protected $table = 'votes';
}
