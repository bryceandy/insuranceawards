<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NominationController extends Controller
{
    public function viewApplication(){
        //display the application form
        return view('nomination.application');
    }

    public function categories(){
        //view all categories
        return view('nomination.categories');
    }

    public function viewCategory($name){
        //display the category details
        $titleName = ucwords(str_replace('-', ' ', $name));
        return view('nomination.'.$name, compact('titleName'));
    }
}
