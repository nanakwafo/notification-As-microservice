<?php
/**
 * Created by PhpStorm.
 * User: nanakwafo
 * Date: 16/04/2020
 * Time: 22:49
 */

namespace App\Repositories;


class VerificcationCodeRepository
{


    public function generateCode(){
        $generater="ABCDEFGH1JKLMNOPQRSTUVWXYZ1234567890";
        
        $code=substr(str_shuffle($generater),0,4);
        return $code;
    }
}