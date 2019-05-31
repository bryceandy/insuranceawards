<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplicationSent extends Mailable
{
    use Queueable, SerializesModels;

    public $application;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($application)
    {
        $this->application = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $app = (object) $this->application;
        //check if a link was set
        if($app->link){
            $link = $app->link;
        }
        else{
            $link = null;
        }
        //check if a file was set

        if(isset($app->file)){
            return $this->markdown('mails.application')
                ->with([
                    'fname' => $app->firstname,
                    'lname' => $app->lastname,
                    'email' => $app->email,
                    'phone' => $app->phone,
                    'nominee' => $app->nominee,
                    'description' => $app->description,
                    'category' => $app->category,
                    'link' => $link
                ])
                ->subject('Application Received')
                ->attach($app->file, [
                    'as' => $app->filename,
                    'mime' => $app->filemime
                ]);
        }
        return $this->markdown('mails.application')
            ->with([
                'fname' => $app->firstname,
                'lname' => $app->lastname,
                'email' => $app->email,
                'phone' => $app->phone,
                'nominee' => $app->nominee,
                'description' => $app->description,
                'category' => $app->category,
                'link' => $link
            ])
            ->subject('Application Received');


    }
}
