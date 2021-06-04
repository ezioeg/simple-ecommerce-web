<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Checkout;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Checkout section------------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    public function index()
    {
        $basket = DB::table('products')->get();
        return view('checkout.index', compact('basket'));
    }

    public function store(Request $request){

        // Field validation
        $this->validate($request, [
 
            'fullname' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'cardname' => 'required',
            'cardnumber' => 'required',
            'expmonth' => 'required',
            'expyear' => 'required',
            'cvv' => 'required',
            'total' => 'required',
        ]); 

        // Defining array for data storage
        $data = array();
        $data['fullname'] = $request->fullname;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['state'] = $request->state;
        $data['postcode'] = $request->postcode;
        $data['cardname'] = $request->cardname;
        $data['cardnumber'] = $request->cardnumber;
        $data['expmonth'] = $request->expmonth;
        $data['expyear'] = $request->expyear;
        $data['cvv'] = $request->cvv;
        $data['total'] = $request->total;

        $request->session()->forget('basket');
        $checkout = DB::table('checkouts')->insert($data);
        return redirect()->route('menu.index')->with('success','Thanks for your purchase!');
    }

}
