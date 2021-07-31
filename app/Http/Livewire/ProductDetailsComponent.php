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
          dd($product_id);
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('message','Product added to Cart!');
        return redirect()->route('cart');

    }

    public function render()
    {
        $product = Product::where('slug',$this->product_slug)->first();
        return view('livewire.product-details-component',[
            'product'=>$product
            ])->layout('layouts.base');
    }
}
