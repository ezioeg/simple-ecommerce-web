<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Product section-------------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    public function index()
    {
        
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {

        $fields = [
            'name' => 'required',
            'price' => 'required',
            'photo' => 'required'
        ];
        
         // Field validation
         $this->validate($request, $fields); 

        // Creating product
        $products = new Product();
        $products->name = $request->name;
        $products->price = $request->price;

        if($request->hasFile('photo')) {
            // Save url and store photo
            $products->photo = $request->file('photo')->store("uploads", 'public');
        }

        $products->save();
            return redirect()->route('product.index')->with('success','Product created successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {

        $fields = [
            'name' => 'required',
            'price' => 'required',
        ];

        // Field validation
        $this->validate($request, $fields); 

         // Updating product
         $product = Product::findOrFail($id);
         $product->name = $request->name;
         $product->price = $request->price;

         if($request->hasFile('photo')) {

            // Delete previous stored photo
            Storage::delete('public/'.$product->photo);
            // Save new URL and store new photo
            $product->photo = $request->file('photo')->store("uploads", 'public');
        }

        $product->update();
        return redirect()->route('product.index')->with('success','Product updated successfully!');
    }

    public function delete($id)
    {

        $product = Product::findOrFail($id);

        // Delete the product and stored photo
        if( Storage::delete('public/'.$product->photo)) {
            Product::destroy($id);
        }

        return redirect()->route('product.index')->with('success','Product deleted successfully!');
    }

//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Favourites section----------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    public function favouriteIndex()
    {
        $favourite =  Product::all();
        return view('favourite.index', compact('favourite'));
    }

    public function addToFavourite($id)
    {
        $product = Product::find($id);
        $favourite = session()->get('favourite');

        // if favourite is empty then this the first product
        if(!$favourite) {
            $favourite = [
                    $id => [
                        'name' => $product->name,
                        'photo'=> $product->photo,
                        'price' => $product->price,
                        'quantity' => 1,
                    ]
            ];
            session()->put('favourite', $favourite);
            return redirect()->route('menu.index')->with('success','Added to favourite!');
        }

        // if favourite not empty then check if this product exist then increment quantity
        if(isset($favourite[$id])) {
            $favourite[$id]['quantity']++;
            session()->put('favourite', $favourite);
            return redirect()->route('menu.index')->with('success','Added to favourite!');
        }

        // if item not exist in favourite then add to cart with quantity = 1
        $favourite[$id] = [
            'name' => $product->name,
            'photo'=> $product->photo,
            'price' => $product->price,
            'quantity' => 1,
        ];

        session()->put('favourite', $favourite);
        return redirect()->route('menu.index')->with('success','Added to favourite!');
        }

    public function deleteFromFavourite($id){
        $favourite = session()->get('favourite');

        if(isset($favourite[$id]))
        {
            unset($favourite[$id]);
            session()->put('favourite', $favourite);
        }

        return redirect()->route('favourite.index')->with('success','Removed from favourite!');
    }

//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Basket section--------------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    public function basketIndex()
    {
        $basket =  Product::all();
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


}
