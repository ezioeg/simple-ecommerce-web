<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
//--------------------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------Contact us section----------------------------------------------------------//
//--------------------------------------------------------------------------------------------------------------------------------------------//

    public function index()
    {
        $product = DB::table('products')->get();
        return view('product.menu', compact('product'));
    }

}
