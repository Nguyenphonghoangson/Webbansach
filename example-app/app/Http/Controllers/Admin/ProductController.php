<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;


class ProductController extends Controller
{
    public function addProduct(){
        $listcategory=category::all();
        return view('Admin.add_product',compact('listcategory'));
    }  
    public function updateProduct(string $id){
        $listcategory=category::all();
        $product=product::find($id);
        return view('Admin.update_product',compact('listcategory','product'));
    } 
    public function create(Request $request){
        
        if($request->has('file')){
            $file=$request->file;
            $file_name=$file->getClientOriginalName();
            $file->move(base_path('public/Assets/User/images/books'),$file_name);
        };
        product::create(['productID'=>$request->productID,'productname'=>$request->productname,'categoryID'=>$request->categoryID,
        'description'=>$request->description,'image'=>$file_name,'discount'=>$request->discount,'tag'=>$request->tags,'price'=>$request->price]);
        return redirect('/Admin/list-eproducts');
    }
    public function listProduct(){
        $listProduct=product::all();
        return view('Admin.list_products',compact('listProduct'));
    }
    public function getAllProduct(){
        $listProduct=product::all();   
        foreach($listProduct as $key => $item){
            $item->category;
        }
        return response()->json(['listProduct' =>$listProduct]);
    }
    // public function updateProduct(string $id){
    //     $listProduct=product::where('productID',$id)->delete();
    // }
    public function deleteProduct(string $id){
        product::find($id)->delete();
        return response()->json();
    }
    public function test(){
        return view('Shop.shopgrid');
    }
    public function detailsProduct(string $id){
        $product=product::find($id);
        $product->category;
        return view('Admin.product_details',compact('product'));

    }
    public function update(Request $request,string $id){
        
        $product=product::find($id);
        if($request->has('file')){
            $file=$request->file;
            $file_name=$file->getClientOriginalName();
            $file->move(base_path('public/Assets/User/images/books'),$file_name);
        }else{
            $file_name=$product->image;
        };
        $product->update(['productname'=>$request->productname,'categoryID'=>$request->categoryID,
        'description'=>$request->description,'image'=>$file_name,'discount'=>$request->discount,'tag'=>$request->tags,'price'=>$request->price]);
        return redirect('/Admin/list-products');

    }
}
