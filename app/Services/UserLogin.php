<?php

namespace App\Services;


interface   UserLogin
{
    function login(string $user, string $password): bool;

}