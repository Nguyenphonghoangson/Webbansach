<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        return view('Home.Home');
    }
    public function getProductbyCategory(string $id,string $sort){
        if($sort==='asc'){
            if($id==='all'){
                $listproducts= product::orderBy(product::raw('price*(100-discount)/100'))->get();
            }
            else{
                $listproducts= product::Where('categoryID',$id)->orderBy(product::raw('price*(100-discount)/100'))->get();
            }
        }
        else if($sort==='desc'){
            if($id==='all'){
                $listproducts= product::orderByDesc(product::raw('price*(100-discount)/100'))->get();
            }
            else{
                $listproducts= product::Where('categoryID',$id)->orderByDesc(product::raw('price*(100-discount)/100'))->get();
            }
        }
            
            return response()->json(['listproducts'=>$listproducts]);
    }
    public function filter_price(string $id,string $maxprice,string $minprice){
        if($id==='all'){
            $listproducts= product::whereBetween(product::raw('price*(100-discount)/100'),[$minprice,$maxprice])->get();
        }
        else{
            $listproducts= product::Where('categoryID',$id)->whereBetween(product::raw('price*(100-discount)/100'),[$minprice,$maxprice])->get();
        }
            return response()->json(['listproducts'=>$listproducts]);
    }
}
