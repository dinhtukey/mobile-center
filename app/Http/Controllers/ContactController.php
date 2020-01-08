<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends FrontEndController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getContact(){
        //check giỏ hàng
        $products = \Cart::content();
        $total = \Cart::total(2,'.','');
        $data['productCart'] = $products;
        $data['total'] = $total;

        return view('contact.index',$data);
    }
    public function postContact(Request $request){
        $contact = new Contact();
        $contact->c_name = $request->name;
        $contact->c_email = $request->email;
        $contact->c_title = $request->title;
        $contact->c_content = $request->content;

        $contact->save();
        return redirect()->back()->with('success','Gửi phản hồi liên hệ thành công');
    }
}
