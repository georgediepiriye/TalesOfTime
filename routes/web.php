<?php

use App\Http\Controllers\Admin\AdminAddProductController;
use App\Http\Livewire\Admin\AdminAddBrandComponent;
use App\Http\Livewire\Admin\AdminBrandComponent;
use App\Http\Livewire\Admin\AdminEditBrandComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',HomeComponent::class);
Route::get('/shop',ShopComponent::class)->name('shop');
  

//Admin
Route::get('/admin/brands',AdminBrandComponent::class)->name('admin.brands');
Route::get('/admin/brand/add',AdminAddBrandComponent::class)->name('admin.addbrand');
Route::get('/admin/brand/edit/{brand_slug}',AdminEditBrandComponent::class)->name('admin.editbrand');
Route::get('/admin.products',AdminProductComponent::class)->name('admin.products');
Route::get('/admin/add-product',[AdminAddProductController::class,'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
