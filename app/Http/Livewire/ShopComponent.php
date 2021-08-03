<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;


class ShopComponent extends Component{  

    public $sorting;
    public $searchItem;
    public function mount(){
        $this->sorting = 'default';
    }

  //function to store product in cart
  public function store($product_id,$product_name,$product_price){
    Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
    session()->flash('message','Product added Successfully!');
    return redirect()->route('product.cart');
}



    use WithPagination;
    public function render()
    {
        $searchItem = '%'. $this->searchItem . '%';
        if($this->sorting==='date'){
            $products = Product::where('name','LIKE',$searchItem)->orderBy('created_at','DESC')->paginate(12);
        }elseif($this->sorting==='price'){
            $products = Product::where('name','LIKE',$searchItem)->orderBy('price','ASC')->paginate(12);
        }elseif($this->sorting==='price_desc'){
            $products = Product::where('name','LIKE',$searchItem)->orderBy('price','DESC')->paginate(12);
        }else{
            $products = Product::where('name','LIKE',$searchItem)->Paginate(12);
        }

        $brands = Brand::all();


        
        return view('livewire.shop-component',[
            'products'=>$products,
            'brands'=>$brands
            ])->layout('layouts.base');
    }
}
