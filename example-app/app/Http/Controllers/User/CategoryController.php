<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    //
    public function listCategory(){
        $listCategory=category::all();
       return view('Layouts.shop.sidebar',compact('listCategory'));
    }
   
}
