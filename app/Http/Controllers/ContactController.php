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
        return view('contact.index');
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
