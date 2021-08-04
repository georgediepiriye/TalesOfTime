<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;


class ProductDetailsComponent extends Component
{
     public $product_slug;
    public function mount($product_slug){
        $this->product_slug = $product_slug;

    }

    
  //function to store product in cart
  public function store($product_id,$product_name,$product_price){
    Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
    session()->flash('message','Product added Successfully!');
    return redirect()->route('product.cart');
}

    public function render()
    {
        $product = Product::where('slug',$this->product_slug)->first();
        $featured_products = Product::where('featured',1)->paginate(4);
        return view('livewire.product-details-component',[
            'product'=>$product,
            'featured_products'=> $featured_products
            ])->layout('layouts.guest');
    }
}
