<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Swift_Mailer,Swift_SmtpTransport,Swift_Message;
// require_once 'path/to/vendor/autoload.php';
class ContactController extends Controller

{
    public function send (Request $request) {
    //validate form
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            //'message'=>'required',
        ]);

        if($this->isOnline()){
            $mail_data = [
                'recipient'=>'nilushikaprashadini98@gmail.com',
                'fromEmail'=>$request->email,
                'fromName'=>$request->name,
                'subject'=>$request->subject,
                'body'=>$request->message,
            ];

            // Mail::send('email-template', $mail_data, function($message) use ($mail_data){
            //     $message->to($mail_data['recipient'])
            //             ->from($mail_data['fromEmail'],$mail_data['fromName'])
            //             ->subject($mail_data['subject']);
            // });
// Create the Transport
$transport = new Swift_SmtpTransport('smtp.gmail.com', 465,'ssl');
$transport->setUsername(env('MAIL_USERNAME'));
$transport->setPassword(env('MAIL_PASSWORD'));
$transport->setStreamOptions([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
        'crypto_method' => STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT, // Adjust the SSL/TLS version here
    ],
]);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = new Swift_Message($mail_data['subject']);
$message->setFrom([$mail_data['fromEmail'] => 'Sender']);
$message->setTo([$mail_data['recipient'] => 'Recipient']);
$message->setBody($mail_data['body']);

// Send the message
$result = $mailer->send($message);
            return redirect()->back()->with('success','Email Sent!');
        }else{
            return redirect()->back()->withInput()->with('error', 'Check your internet connection');
        }
    }

    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }
    }
}
