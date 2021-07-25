<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;

class AdminBrandComponent extends Component
{ 
    public function deleteBrand($id){
        $brand = Brand::find($id);
        $brand->delete();
        session()->flash('message',"Brand Deleted Successfully!");
    }
    

    public function render()
    {
        $brands = Brand::all();
        return view('livewire.admin.admin-brand-component',['brands'=>$brands])->layout('layouts.base');
    }
}
