<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
class CartController extends Controller
{
    public static function total(){
        $count=0;
        foreach(session('cart') as $key => $item){
            $count+=$item["price"]*$item["quantity"];
         }
         return $count;
     }
    public function cart()
    {  
      
        return view('Cart.cart');
    }
    public function AddCart(string $id){
        
        $product = Product::find($id);

        if(!$product) {
   
            abort(404);
   
        }

        $cart = session()->get('cart');    
           
        // if cart is empty then this the first product
        if(!$cart) {
   
            $cart = [
                    $id => [
                        "name" => $product->productname,
                        "quantity" => 1,
                        "price" => $product->price*(100-$product->discount)/100,
                        "photo" => $product->image,
                    ]
            ];
   
            session()->put('cart', $cart);
            
            return response()->json(['count' => count($cart)]);
        }
   
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
   
            $cart[$id]['quantity']++;
   
            session()->put('cart', $cart); // this code put product of choose in cart
   
            return response()->json(['count' => count($cart)]);
   
        }
   
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->productname,
            "quantity" => 1,
            "price" => $product->price*(100-$product->discount)/100,
            "photo" => $product->image
        ];
        
        session()->put('cart', $cart); // this code put product of choose in cart
        
        
        return response()->json(['count' => count($cart)]);
      
    }
     // update product of choose in cart
 public function update(Request $request)
 {
    
    if($request->id and $request->quantity)
     {
         $cart = session()->get('cart');

         $cart[$request->id]["quantity"] = $request->quantity;
         session()->put('cart', $cart);

         session()->flash('success', 'Cart updated successfully');
         
        
     }
     
   
    return response()->json(['price' =>  $cart[$request->id]["quantity"]* $cart[$request->id]["price"],'total' => CartController::total()]);
 }

 // delete or remove product of choose in cart
 public function remove(Request $request)
 {
     if($request->id) {

         $cart = session()->get('cart');

         if(isset($cart[$request->id])) {

             unset($cart[$request->id]);

             session()->put('cart', $cart);
         }

         session()->flash('success', 'Product removed successfully');

     }
     return response()->json(['total' => CartController::total()]);
    
 }
 
}
