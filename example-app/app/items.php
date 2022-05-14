<?php
namespace App;
class items {
    public $products=null;
    public $totalprice=0;
    public $totalqty=0;
    public function _constant($cart){
        if($cart){
            $this->products=$cart->products;
            $this->totalprice=$cart->totalprice;
            $this->totalqty=$cart->totalqty;
        }
    }
}