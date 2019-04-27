<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //display the homepage
        return view('pages.home');
    }

    public function about(){
        //display the aboutpage
        return view('pages.about');
    }

    public function contact(){
        //display the contactpage
        return view('pages.contact');
    }

    public function forms(){
        //display the aboutpage
        return view('pages.forms');
    }

    public function judges(){
        //display the judges page
        return view('pages.judges');
    }
}
