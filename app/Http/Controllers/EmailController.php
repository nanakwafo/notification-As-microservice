<?php

namespace App\Http\Controllers;



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

    public function  SendWelcomeEmail(Request $request){
        //validate
        $this->emailRepository->welcomeemail($request);
        
       

    }
    public function sendforgotpassword(Request $request){

        //validate
        $this->emailRepository->forgotpassword($request);
    

    }
    public function confirmpassword(Request $request){
        //validate
        $this->emailRepository->confirmpassword($request);
       
    }

    public function requestcompletion(Request $request){
        //validate
        $this->emailRepository->requestcompletion($request);
      
    }
    public function clientRequest(Request $request){
        //validate
        $this->emailRepository->clientRequestEmail($request);
    }
}
