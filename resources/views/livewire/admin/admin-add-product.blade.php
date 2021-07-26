@extends('layouts.base2')

@section('content')
<main>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h3><b>Add New Product</b></h3>

                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <a href="{{ route('admin.products') }}" class="btn btn-success pull-right" >All Products</a>

                            </div>

                        </div>

                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}

                            </div>
                            
                        @endif
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4">Product Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="name" placeholder="Product Name" class="form-control input-md" >
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                           

                            <div class="form-group row">
                                <label class="col-md-4"> Description</label>
                                <div class="col-md-4">
                                    <textarea placeholder="Description" name="description" class="form-control input-md" ></textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4"> Price:</label>
                                <div class="col-md-4">
                                    <input type="text" name="price" placeholder="Price" class="form-control input-md" >
                                    @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

             

                            <div class="form-group row">
                                <label class="col-md-4">Stock status</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="stock_status" >
                                        <option value="instock">Instock</option>
                                        <option value="outofstock">Out of Stock</option>

                                    </select>
                                    @error('stock_status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4"> Featured</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="featured">
                                        <option value=0>No</option>
                                        <option value=1>Yes</option>

                                    </select>
                                   
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">Quantiy</label>
                                <div class="col-md-4">
                                    <input type="text" name="quantity" placeholder="Quantity" class="form-control input-md" >
                                    @error('quantity')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">Product First Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" name="image1">
                                    @error('image1')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">Product Second Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" name="image2">
                                    @error('image2')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">Product Third Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" name="image3">
                                    @error('image3')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">Brand</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="brand_id">
                                        <option value="">Select Brand</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            
                                        @endforeach
                                        
                                      
                                    </select>
                                    @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label class="col-md-4"></label>
                                <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>


</main>
  
@endsection