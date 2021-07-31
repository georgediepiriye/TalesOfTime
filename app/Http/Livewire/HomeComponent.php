<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $best_seller_products = Product::all()->random(4);
        $featured_products = Product::where('featured',1)->paginate(4);
        return view('livewire.home-component',[
            'best_seller_products'=>$best_seller_products,
            'featured_products' =>$featured_products

            ])->layout('layouts.base');
    }
}
