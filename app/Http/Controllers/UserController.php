<?php

namespace App\Http\Controllers;

use App\Services\UserLogin;

use App\Services\Impl\UserLoginImpl;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    private UserLogin $UserLogin;

    /**
     * @param UserLogin $UserLogin
     */
    public function __construct(UserLogin $UserLogin)
    {
        $this->UserLogin = $UserLogin;
    }

    public function login(): Response
    {
        return response()
            ->view("user.login", [
                "title" => "Login"
            ]);
    }

    public function doLogin(Request $request): Response|RedirectResponse
    {
        $user = $request->input('user');
        $password = $request->input('password');

        // validate input
        if (empty($user) || empty($password)) {
            return response()->view("user.login", [
                "title" => "Login",
                "error" => "User or password is required"
            ]);
        }

        if ($this->UserLogin->login($user, $password)) {
            $request->session()->put("user", $user);
            return redirect("/");
        }

        return response()->view("user.login", [
            "title" => "Login",
            "error" => "User or password is wrong"
        ]);
    }
}