<?php

use App\Http\Livewire\Admin\AdminBrandComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;

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
  

//Admin
Route::get('/admin/brands',AdminBrandComponent::class)->name('admin.brands');
Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
Route::get('/admin/category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');