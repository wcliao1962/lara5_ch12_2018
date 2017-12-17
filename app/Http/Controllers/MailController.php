<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class MailController extends Controller
{

    public function getSend(){

        // $from=??
        // $to=??
        $content='xxxxxxxxxxxxx';
        $data = ['name' => '張三', 'content'=> $content, ];

    	Mail::send('email.test',$data,function($message){
    		$message->subject('Laravel 5 Mail');
		    $message->to('lwc32005@gmail.com', '張三');
            $message->from('netadmin@ncut.edu.tw', 'netadmin');
		});

    	return "Email 已寄出";

    }

}
