<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminEditProductController extends Controller
{
    //
    public function addItem(Request $request,$product_id){
  


        $request->validate([
            "name" => 'required',
            "description" => 'required',
            "price" => 'required|numeric',
            "stock_status" => 'required',
            "featured" => 'required',
            "quantity" => 'required|numeric',
            'image1' => 'required|mimes:jpeg,png,jpg|max:5048',
            'image2' => 'required|mimes:jpeg,png,jpg|max:5048',
            'image3' => 'required|mimes:jpeg,png,jpg|max:5048',
            "brand_id" => 'required',
    
        ]);
    
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock_status = $request->stock_status;
        $product->featured = $request->featured;
        $product->quantity= $request->quantity;
    
       
        $uploadedFileUrl1 = Cloudinary::upload($request->file('image1')->getRealPath())->getSecurePath();
        $product->image1 = $uploadedFileUrl1;
    
        
        $uploadedFileUrl2 = Cloudinary::upload($request->file('image2')->getRealPath())->getSecurePath();
        $product->image2 = $uploadedFileUrl2;
    
    
        $uploadedFileUrl3 = Cloudinary::upload($request->file('image3')->getRealPath())->getSecurePath();
        $product->image3 = $uploadedFileUrl3;
    
        $product->brand_id = $request->brand_id;
  
        $product->save();
        session()->flash('message','Your Product has been updated Successfully!');
        return redirect()->route('admin.products');
    
    }

    public function index($product_id){
        $product = Product::find($product_id);
        $brands = Brand::all();
        return view('livewire.admin.admin-edit-product',[
            'brands'=> $brands,
            'product'=> $product
        ]);
    }
}
