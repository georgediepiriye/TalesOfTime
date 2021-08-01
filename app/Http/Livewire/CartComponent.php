<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;


class CartComponent extends Component
{
     
    //function to increase quantity of item in the cart
    public function increaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');
       
    }

    //function to decrease quantity of item in the cart
    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');
   
    }

    //function to remove single item from cart
    public function removeItem($rowId){
        Cart::remove($rowId);
        session()->flash('message','Item has been deleted!');
        $this->emitTo('cart-count-component','refreshComponent');

    }

    //function to clear all cart items
    public function clearCart(){
        Cart::destroy();
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('message','All items removed Successfully!');
    }


    // public function checkout(){
    //     if(Auth::check()){
    //         return redirect()->route('checkout');
    //     }else{
    //         return redirect()->route('login');
    //     }
    // }


    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
