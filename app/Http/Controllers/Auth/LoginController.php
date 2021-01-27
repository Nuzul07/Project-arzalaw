<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function login(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'password' => 'required|string|min:5'
        ]);

        $login = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if (auth()->attempt($login)) {
            return redirect(url('zraw-&&&-admin'));
        }

        return redirect(url('zraw-&&&-admin/login'))->withInput()->withErrors(['password' => 'Wrong Username/Password']);
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
