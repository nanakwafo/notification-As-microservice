<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Client;
use Nexmo\Client\Credentials\Basic;

class SmsController extends Controller
{
    //
    public function send(){
        $basic  = new Basic(env('NEXMO_KEY'),env('NEXMO_SECRET'));
        $client = new Client($basic);

        $message = $client->message()->send([
            'to' => '447950199283',
            'from' => 'test',
            'text' => 'testing me'
        ]);

        return $message;
    }
}
