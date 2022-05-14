<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function listCategories(){
        return view('Admin.list_categories');
    } 
    public function addCategory(){
        return view('Admin.add_category');
    }
    
}
