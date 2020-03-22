<?php
/**
 * Created by PhpStorm.
 * User: nanakwafo
 * Date: 22/03/2020
 * Time: 21:03
 */
namespace App\Repositories;

interface EmailRepositoryInterface
{
    public function welcomeemail ($request);

    public function forgotpassword ($request);

    public function confirmpassword ($request);

    public function requestcompletion ($request);

    public function clientRequestEmail ($request);
}