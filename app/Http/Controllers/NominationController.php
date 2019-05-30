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

    public function apply(Request $request) {
        //validate user input

        //process form application
        $application = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'file' => $request->file
        ];

        //send email
        try{
            Mail::to('bryceandy@rocketmail.com')->send(new ApplicationSent($application));
            return back()->with(['mailsuccess'=> 'Your application was sent successfully!']);

        }catch (\Exception $e){
            return back()->with(['mailfail'=> 'Your application could not be sent, please try again later!'. $e]);
        }

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
