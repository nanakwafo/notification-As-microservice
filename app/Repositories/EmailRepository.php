<?php
/**
 * Created by PhpStorm.
 * User: nanakwafo
 * Date: 22/03/2020
 * Time: 20:32
 */
namespace App\Repositories;


use App\Mail\ClientRequest;
use App\Mail\ConfirmEmail;
use App\Mail\ForgotPassword;
use App\Mail\RequestCompletion;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class EmailRepository implements EmailRepositoryInterface
{

    public function welcomeemail ($request)
    {
        Mail::to('nanamensah1140@gmail.com')->send(new WelcomeMail());
        return new WelcomeMail();

    }
    public function forgotpassword($request){
        Mail::to($request->email)->send(new ForgotPassword());
        return new ForgotPassword();
    }
    public function confirmpassword($request){
        Mail::to($request->email)->send(new ConfirmEmail());
        return new ConfirmEmail();
    }
    public function requestcompletion($request){
        Mail::to($request->email)->send(new RequestCompletion());
        return new RequestCompletion();
    }
    public function clientRequestEmail($request){
        Mail::to($request->email)->send(new ClientRequest());
        return new ClientRequest();
    }
}