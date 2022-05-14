<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class HomeController extends Controller
{
    //
    public function index(){
        $listproducts = product::all();
        $listproductsnew = product::orderByDesc('created_at')->Take(7)->get();
        $listproductsbestsaller = product::orderByDesc('discount')->Take(8)->get();
       
        return view('Home.Home',compact('listproducts','listproductsnew','listproductsbestsaller'));
    }
}
