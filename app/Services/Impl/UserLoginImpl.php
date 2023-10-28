<?php

namespace App\Services\Impl;

use App\Services\UserLogin;

class UserLoginImpl implements UserLogin
{
    private array $users=[
        "darah"=> "Awokwok1"
    ];
    function login(string $user, string $password): bool
    {
        if(!isset($this->users[$user])){
            return false;
        }
        $correctPassword = $this->users[$user];
        return $password == $correctPassword;
    }
}