<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm() 
    {

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => ['email', 'required'],
            'passowrd' => ['required', 'min:8']
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'email' => ':attribute harus bertipe email',
            'min' => ':attribute minimal :attribute'
        ];

        //$this->validate($request, $rules, $message);


        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credential)) {
            return redirect()->route('home');
        }else{
            session()->flash('error', 'masukkan email dan password yang benar');
            return redirect()->back();
        }

        //dd($credential);

        //return redirect()->back();
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
