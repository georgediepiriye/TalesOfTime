<div>
    <style>
        .nav svg{
            height: 20px;
        }
        .nav .hidden{
            display: block !important;

        }
    </style>
    <div class="container" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 30px 0px;">
                        <div class="row" >
                            <div class="col-md-6">
                                All Products

                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <a href="{{ route('admin.addproduct') }}" class="btn btn-success pull-right">Add New</a>

                            </div>

                        </div>
                       
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}

                            </div>
                            
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Stock status</th>
                                    <th>Price</th>
                                    <th>Brand</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product )
                                    <tr>
                                    
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name}}</td>
                                        <td><img src="{{ $product->image1 }}" alt="Image" width='60'></td>
                                        <td>{{ $product->stock_status}}</td>
                                        <td>{{ $product->price}}</td> 
                                        <td>{{ $product->brand->name}}</td> 
                                        <td>{{ $product->created_at}}</td>
                                        <td>
                                            <a href="{{ route('admin.editproduct',['product_id'=>$product->id]) }}"> <i  class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" style="margin-left: 10px;" onclick="confirm('Are you sure you want to delete this product?')|| event.stopImmediatePropagation()"   wire:click.prevent="deleteProduct({{ $product->id }})"> <i  class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                        
                                    </tr>
                                    
                                @endforeach
                            </tbody>
    
                        </table>
                        {{ $products->links('pagination::bootstrap-4') }}
    
                    </div>
    
                </div>
                
    
            </div>
    
        </div>
    
    </div>
    

</div>
