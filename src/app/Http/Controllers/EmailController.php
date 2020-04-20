<?php

namespace App\Http\Controllers;


use App\Http\Requests\clientRequest;
use App\Http\Requests\confirmPassword;
use App\Http\Requests\ForgetPassword;
use App\Http\Requests\requestCompletion;
use App\Http\Requests\WelcomeEmail;
use App\Repositories\EmailRepositoryInterface;
use Illuminate\Http\Request;


class EmailController extends Controller
{
    //
    private $emailRepository;

    /**
     * EmailController constructor.
     */
    public function __construct (EmailRepositoryInterface $emailRepository)
    {
        $this->emailRepository = $emailRepository;

    }

    public function SendWelcomeEmail (WelcomeEmail $request)
    {
        //validate
        $this->emailRepository->welcomeemail ($request);


    }

    public function sendforgotpassword (ForgetPassword $request)
    {

        //validate
        $this->emailRepository->forgotpassword ($request);


    }

    public function confirmpassword (confirmPassword $request)
    {
        //validate
        $this->emailRepository->confirmpassword ($request);

    }

    public function requestcompletion (requestCompletion $request)
    {
        //validate
        $this->emailRepository->requestcompletion ($request);

    }

    public function clientRequest (clientRequest $request)
    {
        //validate
        $this->emailRepository->clientRequestEmail ($request);
    }

    public function sendVerificationMail ($email, $code)
    {

//        //validate
       $this->emailRepository->verificationMail ($email,$code);
    }
}
