<?php

namespace App\Http\Controllers;

use App\Mail\ClientRequest;
use App\Mail\ConfirmEmail;
use App\Mail\ForgotPassword;
use App\Mail\RequestCompletion;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function  welcomeemail(Request $request){
        Mail::to($request->email)->send(new WelcomeMail());
        return new WelcomeMail();

    }
    public function forgotpassword(Request $request){
        Mail::to($request->email)->send(new ForgotPassword());
        return new ForgotPassword();

    }
    public function confirmpassword(Request $request){
        Mail::to($request->email)->send(new ConfirmEmail());
        return new ConfirmEmail();
    }

    public function requestcompletion(Request $request){
        Mail::to($request->email)->send(new RequestCompletion());
        return new RequestCompletion();
    }
    public function clientRequest(Request $request){
        Mail::to($request->email)->send(new ClientRequest());
        return new ClientRequest();
    }
}
