<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MaliciousEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $application, $request;

  /**
   * MaliciousEmail constructor.
   * @param $application
   * @param $request
   */
    public function __construct($application, $request)
    {
        $this->application = $application;
        $this->request = $request;
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
      //check if files were set and attached
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
          'link' => $link,
          'ip' => $this->request->ip(),
          'ips' => $this->request->ips(),
          'ajax' => $this->request->ajax(),
          'agent' => $this->request->userAgent()
        ])
        ->subject('Malicious')
      ;
    }
}
