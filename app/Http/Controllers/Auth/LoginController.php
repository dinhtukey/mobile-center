<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontEndController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends FrontEndController
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
    public function __construct()
    {
        parent::__construct();
    }
    use AuthenticatesUsers;
    public function getLogin(){
        //check giỏ hàng
        $products = \Cart::content();
        $total = \Cart::total(2,'.','');
        $data['productCart'] = $products;
        $data['total'] = $total;
        return view('auth.login',$data);
    }

    public function postLogin(Request $request){
        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
    }
    
    public function getLogout(){
        \Auth::logout();
        return redirect()->route('home');
    }
}
