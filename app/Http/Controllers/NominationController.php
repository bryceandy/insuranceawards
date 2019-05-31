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
            'phone' => $request->phone,
            'nominee' => $request->nominee,
            'category' => $request->category,
            'description' => $request->description,

        ];

        if($request->link !== ''){
            $application += ['link' => $request->link];
        }
        if($request->hasFile('attachment') ){
            $file = $request->file('attachment');
            $application += [
                'file' => $file->getRealPath(),
                'filename' => $file->getClientOriginalName(),
                'filemime' => $file->getMimeType()
            ];
        }
        //send email
        //          Mail::to('glowconsults@gmail.com')->send(new ApplicationSent($application));
        $mail = Mail::to('bryceandy@rocketmail.com')->send(new ApplicationSent($application));

        if($mail){
            return back()->with(['mailsuccess'=> 'Your application was sent successfully!']);
        }
        else{
            return back()->with(['mailfail'=> 'Your application could not be sent, please try again later!']);
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
