<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEditBrandComponent extends Component
{
    public $brand_slug,$brand_id,$name,$slug;

public function mount($brand_slug){
    $brand = Brand::where('slug',$brand_slug)->first();
    $this->brand_id = $brand->id;
    $this->name=$brand->name;
    $this->slug= $brand->slug;

}

public function updated($fields){
    $this->validateOnly($fields,[
        'name'=> 'required',
        'slug' => 'required|unique:brands'
    ]);
}

public function updateBrand(){
    $this->validate([
        'name'=> 'required',
        'slug' => 'required|unique:brands'

    ]);
    $brand = Brand::find($this->brand_id);
    $brand->name = $this->name;
    $brand->slug = $this->slug;
    $brand->save();
    session()->flash('message','Brand Updated Successfully');
}

public function generateSlug(){
    $this->slug = Str::slug($this->name);
}

    public function render()
    {
        
        return view('livewire.admin.admin-edit-brand-component')->layout('layouts.guest');
    }
}
