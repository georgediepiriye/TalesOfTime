<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;

use Illuminate\Support\Str;

class AdminAddBrandComponent extends Component
{ 
    public $name,$slug;
    public function generateSlug(){
        $this->slug = Str::slug($this->name);

    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required|unique:brands'

        ]);
    }

    public function storeBrand(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required|unique:brands'
        ]);


        $brand = new Brand();
        $brand->name = $this->name;
        $brand->slug = $this->slug;
        $brand->save();
        session()->flash('message','Brand has been created successfully');
     
    }

    public function render()
    {
        return view('livewire.admin.admin-add-brand-component')->layout('layouts.guest');
    }
}
