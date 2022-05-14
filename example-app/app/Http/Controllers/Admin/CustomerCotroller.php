<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerCotroller extends Controller
{
    //
    public function listCustomer(){
        return view('Admin.list_customer');
    }
   

}
