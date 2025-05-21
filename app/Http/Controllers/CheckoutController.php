<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Checkout;

class CheckoutController extends Controller
{
//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Checkout section------------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    public function index()
    {
        $basket = Product::all();
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

          // Creating checkout
          $checkouts = new Checkout();
          $checkouts->fullname = $request->fullname;
          $checkouts->email = $request->email;
          $checkouts->address = $request->address;
          $checkouts->city = $request->city;
          $checkouts->state = $request->state;
          $checkouts->postcode = $request->postcode;
          $checkouts->cardname = $request->cardname;
          $checkouts->cardnumber = $request->cardnumber;
          $checkouts->expmonth = $request->expmonth;
          $checkouts->expyear = $request->expyear;
          $checkouts->cvv = $request->cvv;
          $checkouts->total = $request->total;
 
        $request->session()->forget('basket');
        $checkouts->save();
        return redirect()->route('menu.index')->with('success','Thanks for your purchase!');
    }

}
