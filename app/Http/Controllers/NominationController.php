<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationSent;
use App\Mail\ApplicationSentFeedback;
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

        //if there is a link, add it
        if($request->link !== ''){
            $application += ['link' => $request->link];
        }

        //if there are attachments, attach them
        $attachments = ['attachment', 'attachment2', 'attachment3'];

        for($fileNumber = 1; $fileNumber < 4; $fileNumber++){

            if($request->hasFile($attachments[$fileNumber - 1]) ){
                $file = $request->file($attachments[$fileNumber - 1]);
                $application += [
                    'file'.$fileNumber => $file->getRealPath(),
                    'filename'.$fileNumber => $file->getClientOriginalName(),
                    'filemime'.$fileNumber => $file->getMimeType()
                ];
            }
        }

        try{
            //send application through email
            Mail::to('glowconsults@gmail.com')->send(new ApplicationSent($application));
            Mail::to('poyuke@tira.go.tz')->send(new ApplicationSent($application));
            Mail::to('ceo@iit.co.tz')->send(new ApplicationSent($application));

            //send feedback to applicant
            Mail::to($request->email)->send(new ApplicationSentFeedback($application));

            return back()->with(['mailsuccess' => 'Your application was sent successfully!']);

        } catch (\Exception $e){
            return back()->with(['mailfail'=> 'Your application could not be sent, please try again later!']);
        }

    }

    public function guidelines(){

        //view all categories
        return view('nomination.guidelines');
    }

    public function viewCategory($name){
        //display the category details
        $titleName = ucwords(str_replace('-', ' ', $name));
        return view('nomination.'.$name, compact('titleName'));
    }
}
