<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;


class ShopComponent extends Component{  

    public $sorting;
    public function mount(){
        $this->sorting = 'default';
    }
  



    use WithPagination;
    public function render()
    {
        
        if($this->sorting==='date'){
            $products = Product::orderBy('created_at','DESC')->paginate(12);
        }elseif($this->sorting==='price'){
            $products = Product::orderBy('regular_price','ASC')->paginate(12);
        }elseif($this->sorting==='price_desc'){
            $products = Product::orderBy('regular_price','DESC')->paginate(12);
        }else{
            $products = Product::Paginate(12);
        }

        $brands = Brand::all();


        
        return view('livewire.shop-component',['products'=>$products,'brands'=>$brands])->layout('layouts.base');
    }
}
