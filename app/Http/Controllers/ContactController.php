<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Contact us section----------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    public function index()
    {
        // $contact = Contact::all();
        return view('contact.index');
    }

    public function store(Request $request)
    {

        // Field validation
        $this->validate($request, [

            'fullname' => 'required',
            'email' => 'required',
            'subject' => 'required',
        ]); 

         // Creating contact
         $contacts = new Contact();
         $contacts->fullname = $request->fullname;
         $contacts->email = $request->email;
         $contacts->subject = $request->subject;

         $contacts->save();
        return redirect()->route('contact.index')->with('success','Your message was sent!');
    }

}
