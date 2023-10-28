<?php

namespace App\Providers;

use App\Services\Impl\UserLoginImpl;
use App\Services\UserLogin;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Contracts\Support\DeferringDisplayableValue;
use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider implements DeferrableProvider
{

    public array $singletons = [
        UserLogin::class => UserLoginImpl::class
    ];

    public function provides(): array
    {
        return [UserLogin::class];
    }
    public function register(): void
    {
        //
    }


    public function boot(): void
    {
        //
    }
}