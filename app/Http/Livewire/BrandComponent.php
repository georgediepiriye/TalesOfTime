<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Brand;

class BrandComponent extends Component{  

    public $sorting,$brand_slug;

    public function mount($brand_slug){
        $this->sorting = 'default';
        $this->brand_slug = $brand_slug;
    }




    use WithPagination;
    public function render()
    {
        $brand = Brand::where('slug',$this->brand_slug)->first();
        $brand_id = $brand->id;
        $brand_name = $brand->name;

        if($this->sorting==='date'){
            $products = Product::where('brand_id',$brand_id)->orderBy('created_at','DESC')->paginate(12);
        }elseif($this->sorting==='price'){
            $products = Product::where('brand_id',$brand_id)->orderBy('regular_price','ASC')->paginate(12);
        }elseif($this->sorting==='price_desc'){
            $products = Product::where('brand_id',$brand_id)->orderBy('regular_price','DESC')->paginate(12);
        }else{
            $products = Product::where('brand_id',$brand_id)->Paginate(12);
        }

        $brands = Brand::all();


        
        return view('livewire.brand-component',['products'=>$products,'brands'=>$brands,'brand_name'=>$brand_name])->layout('layouts.base');
    }
}
