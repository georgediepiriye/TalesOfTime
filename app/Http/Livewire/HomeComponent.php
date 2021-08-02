<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{ 
    
    //function to store product in cart
    public function store($product_id,$product_name,$product_price){
      Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
      session()->flash('message','Product added Successfully!');
      return redirect()->route('product.cart');
  }



    public function render()
    {
      
        $featured_products = Product::where('featured',1)->paginate(4);
        $latest_products = Product::orderBy('created_at',"DESC")->paginate(4);
        return view('livewire.home-component',[
       
            'featured_products' =>$featured_products,
            'latest_products'=> $latest_products

            ])->layout('layouts.base');
    }
}
