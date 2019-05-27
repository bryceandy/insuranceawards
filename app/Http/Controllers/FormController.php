<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        //display the forms default page
        return view('forms.home');
    }

    public function viewForm($name){
        //display the form
        $titleName = ucwords(str_replace('-', ' ', $name));

        return view('forms.'.$name, compact($titleName));
    }
}
