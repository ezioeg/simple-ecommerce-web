<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use Validator; 
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Product section-------------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('products')->get();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //defining array for data storage
        $data = array();
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $photo = $request->file('photo');
        if($photo) {
            $photo_name = date('dmy_H_s_i');
            $ext = strtolower($photo->getClientOriginalExtension());
            $photo_full_name = $photo_name.'.'.$ext;
            $upload_path = 'public/media/';
            $photo_url = $upload_path.$photo_full_name;
            $success = $photo->move($upload_path,$photo_full_name);

            $data['photo'] = $photo_url;
            $product = DB::table('products')->insert($data);
            return redirect()->route('product.index')
                        ->with('success','Product created successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= DB::table('products')->where('id',$id)->first();
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $photo = $request->file('photo');
        if($photo) {
            $photo_name = date('dmy_H_s_i');
            $ext = strtolower($photo->getClientOriginalExtension());
            $photo_full_name = $photo_name.'.'.$ext;
            $upload_path = 'public/media/';
            $photo_url = $upload_path.$photo_full_name;
            $success = $photo->move($upload_path,$photo_full_name);

            $data['photo'] = $photo_url;
            $product = DB::table('products')->where('id',$id)->update($data);
            return redirect()->route('product.index')
                        ->with('success','Product updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = DB::table('products')->where('id',$id)->first();
        $product = DB::table('products')->where('id',$id)->delete();
        return redirect()->route('product.index')
                        ->with('success','Product deleted successfully!');
    }

//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Basket section--------------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    public function basketIndex()
    {
        $basket = DB::table('products')->get();
        return view('basket.index', compact('basket'));
    }

    public function addToBasket($id)
    {
            $product = Product::find($id);

            $basket = session()->get('basket');
            // if basket is empty then this the first product
            if(!$basket) {
                $basket = [
                        $id => [
                            'name' => $product->name,
                            'photo'=> $product->photo,
                            'price' => $product->price,
                            'quantity' => 1,
                        ]
                ];
                session()->put('basket', $basket);
                return redirect()->route('menu.index')->with('success','Added to basket!');
            }
            // if basket not empty then check if this product exist then increment quantity
            if(isset($basket[$id])) {
                $basket[$id]['quantity']++;
                session()->put('basket', $basket);
                return redirect()->route('menu.index')->with('success','Added to basket!');
            }
            // if item not exist in basket then add to basket with quantity = 1
            $basket[$id] = [
                'name' => $product->name,
                'photo'=> $product->photo,
                'price' => $product->price,
                'quantity' => 1,
            ];

            session()->put('basket', $basket);
            return redirect()->route('menu.index')->with('success','Added to basket!');
        }

    public function deleteFromBasket($id){
            $basket = session()->get('basket');

            if(isset($basket[$id]))
            {
                unset($basket[$id]);
                session()->put('basket', $basket);
            }

        return redirect()->route('basket.index')->with('success','Removed from basket!');
    }

//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Checkout section------------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    public function checkoutIndex()
    {
        $basket = DB::table('products')->get();
        return view('checkout.index', compact('basket'));
    }

    public function checkoutStore(Request $request){
        //defining array for data storage
        $data = array();
        $data['fullname'] = $request->fullname;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['state'] = $request->state;
        $data['zip'] = $request->zip;
        $data['cardname'] = $request->cardname;
        $data['cardnumber'] = $request->cardnumber;
        $data['expmonth'] = $request->expmonth;
        $data['expyear'] = $request->expyear;
        $data['cvv'] = $request->cvv;
        $data['total'] = $request->total;

        $request->session()->forget('basket');
        $checkout = DB::table('checkouts')->insert($data);
        return redirect()->route('menu.index')->with('success','Order placed successfully!');
    }

}
