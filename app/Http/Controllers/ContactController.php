<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
