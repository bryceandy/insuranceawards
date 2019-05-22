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

    public function shortlist(){
        //display the shortlist page
        return view('pages.shortlist');
    }

    public function sponsor(){
        //display the sponsor page
        return view('pages.sponsor');
    }

    public function sponsorship(){
        //display the sponsorship page
        return view('pages.sponsorship');
    }

    public function faqs(){
        //display the faqs page
        return view('pages.faqs');
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
