<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends FrontEndController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getRegister(){
        //check giỏ hàng
        $products = \Cart::content();
        $total = \Cart::total(2,'.','');
        $data['productCart'] = $products;
        $data['total'] = $total;
        return view('auth.register',$data);
    }
    public function postRegister(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);

        $user->save();
        if($user->id){
            return redirect()->route('get.login');
        }
        return redirect()->back();
    }
   
}
