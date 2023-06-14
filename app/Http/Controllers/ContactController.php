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
            //dd($request);
            return "Connected!";
        }else{
            return "No connection";
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
