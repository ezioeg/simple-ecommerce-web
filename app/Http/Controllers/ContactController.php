<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Contact us section----------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    public function index()
    {
        $contact = DB::table('contacts')->get();
        return view('contact.index', compact('contact'));
    }

    public function store(Request $request)
    {

        // Field validation
        $this->validate($request, [

            'fullname' => 'required',
            'email' => 'required',
            'subject' => 'required',
        ]); 

        // Defining array for data storage
        $data = array();
        $data['fullname'] = $request->fullname;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        
        $contact = DB::table('contacts')->insert($data);
        return redirect()->route('contact.index')->with('success','Your message was sent!');
    }

}
