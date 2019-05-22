<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //display the homepage
        return view('pages.home');
    }

    public function forms(){
        //display the aboutpage
        return view('pages.forms');
    }

    public function steering(){
        //display the steering page
        return view('pages.steering');
    }

    public function judges(){
        //display the judges page
        return view('pages.judges');
    }

    public function secretariat(){
        //display the secretariat page
        return view('pages.secretariat');
    }

    public function about(){
        //display the about page
        return view('pages.about');
    }

    public function contact(){
        //display the contact page
        return view('pages.contact');
    }
}
