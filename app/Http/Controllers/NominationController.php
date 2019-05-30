<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NominationController extends Controller
{
    public function viewApplication(){
        //display the application form
        return view('nomination.application');
    }

    public function apply():void {
        //process form application


        Mail::to('bryceandy@rocketmail.com')->send(new ApplicationSent());
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
