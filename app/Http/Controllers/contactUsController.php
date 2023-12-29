<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Mail;
use App\Mail\mailSender;
use App\Models\contactUs;
class contactUsController extends Controller
{
    public function contactUs(Request $request){
        $mailData = [
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message'],
        ];
        Mail::to('duduexplained7@gmail.com')->send(new mailSender($mailData));   
        dd('Email Send Succesfully');
    }
}
