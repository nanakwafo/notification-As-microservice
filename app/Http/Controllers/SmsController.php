<?php

namespace App\Http\Controllers;

use App\Repositories\SmsRepository;
use Illuminate\Http\Request;
use Nexmo\Client;
use Nexmo\Client\Credentials\Basic;

class SmsController extends Controller
{
    private $smsRepository;
    /**
     * SmsController constructor.
     */
    public function __construct (SmsRepository $smsRepository)
    {
        $this->smsRepository= $smsRepository;
        
    }
 
    public function  sendSingleSMS(){
        $this->smsRepository->singleSms();
      
    }
    public function sendBulkSMS(){
        $this->smsRepository->bulkSms();
    }
}
