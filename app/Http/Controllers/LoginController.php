<?php

namespace App\Http\Controllers;
use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';
    public function username()
    {
        return 'codpes';
    }
    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
