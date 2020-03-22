<?php
/**
 * Created by PhpStorm.
 * User: nanakwafo
 * Date: 22/03/2020
 * Time: 21:51
 */
namespace App\Repositories;

class SmsRepository{

    private $basicKey;
    private $client;
    /**
     * SmsRepository constructor.
     */
    public function __construct ()
    {
        $this->basicKey = new Basic(env('NEXMO_KEY'),env('NEXMO_SECRET'));
        $this->client = new Client($this->basicKey);
    }

    public function singleSms(){
        $message = $this->client->message()->send([
            'to' => '447950199283',
            'from' => 'test',
            'text' => 'testing me'
        ]);

        return $message;
    }
    
    public function bulkSms(){
        
    }
}