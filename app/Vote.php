<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /*
     * icoya - Insurance Company of the Year Award
     * miip - Most Innovative Insurance Product
     * yaa1 - Young Achievers' Award (Category ideas)
     * yaa2 - Young Achievers' Award (Category research)
     * iboya - Insurance Brokerage of the Year
     * iacoya - Insurance Awareness Campaign of the Year
     * csra - Corporate Social Responsibility Award
     */
    protected $fillable = ['name', 'icoya', 'miip', 'yaa1', 'yaa2', 'iboya', 'iacoya', 'csra'];
}
