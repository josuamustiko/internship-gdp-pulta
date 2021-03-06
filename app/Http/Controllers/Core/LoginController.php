<?php

namespace App\Http\Controllers\Core;

use App\Core\Services\LoginService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    private $loginService;
    public function __construct()
    {
        $this->loginService = new LoginService();
    }

    public function showLayout()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');


        $admin = $this->loginService->login($username, $password);
        if (empty($admin)) {
            return redirect('/admin');
        }
        return redirect ('/admin/payment');
    }

    public function logout()
    {
        Session::flush();
        return redirect ('/admin');
    }
}
