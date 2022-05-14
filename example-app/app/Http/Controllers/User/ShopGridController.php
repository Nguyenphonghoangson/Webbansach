<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ShopGridController extends Controller
{
    public function ShopGrid(){
        $listproducts = product::all();
        return view('Shop/shopgrid',compact('listproducts'));
    }
}
