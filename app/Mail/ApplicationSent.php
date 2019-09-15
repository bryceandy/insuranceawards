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
   * ApplicationSent constructor.
   * @param $application
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
        //check if files were set and attach
        for($fileNumber = 1; $fileNumber < 4; $fileNumber++){

            if(isset($app->{'file'.$fileNumber})){
                $this->attach($app->{'file'.$fileNumber}, [
                    'as' => $app->{'filename'.$fileNumber},
                    'mime' => $app->{'filemime'.$fileNumber}
                ]);
            }
        }

        //display email
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
