<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
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
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login', ['url' => 'admin']);
    }

    public function login(Request $request)
    {

        // return $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $d = Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password

        ], $request->remember);

        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password

        ], $request->remember)) {
            return redirect()->route('admin.dashboard');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
