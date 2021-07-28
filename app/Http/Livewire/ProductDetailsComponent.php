<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
class ProductDetailsComponent extends Component
{
     public $product_slug;
    public function mount($product_slug){
        $this->product_slug = $product_slug;

    }
    public function render()
    {
        $product = Product::where('slug',$this->product_slug)->first();
        return view('livewire.product-details-component',[
            'product'=>$product
            ])->layout('layouts.base');
    }
}
