<main>
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{ $product->image1}}" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="{{ $product->image2 }}" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="{{ $product->image3 }}" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="{{ $product->image1 }}" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="{{ $product->image2 }}" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="{{ $product->image3 }}" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{Str::ucfirst($product->name)  }}</h2>
                        <h5>???{{ number_format($product->price) }}</h5>
                        <p class="available-stock"><span>{{Str::ucfirst($product->stock_status)  }}</span>
                            <p>
                                <h4>Short Description:</h4>
                                <p>{{ $product->description }} </p>
                      

                                <div class="price-box-bar">
                                    
                                
                                    <a class="btn hvr-hover" href="#" style="color:white" wire:click.prevent='store({{ $product->id }},"{{ $product->name }}",{{ $product->price }})'>Add to cart</a>
                                 
                                </div>

                                <div class="add-to-btn">
                                   
                                    <div class="share-bar">
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>

            <div class="products-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-all text-center">
                                <h1>Featured Products</h1>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($featured_products as $featured_product)
                            <div class="col-lg-3 col-md-6 ">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <div class="type-lb">
                                            <p class="new">New</p>
                                        </div>
                                        <img src="{{ $featured_product->image1 }}" class="img-fluid" alt="Image">
                                        <div class="mask-icon">
                                            <ul>
                                                <li><a href="{{ route('product.details',['product_slug'=>$featured_product->slug]) }}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
            
                                            </ul>
                                            <div>
                                                <a href="#" class="cart" wire:click.prevent='store({{ $featured_product->id }},"{{ $featured_product->name }}",{{ $featured_product->price }})'>Add to Cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="why-text">
                                        <h4>{{ $featured_product->name }}</h4>
                                        <h5><b> ???{{ number_format($featured_product->price) }}</b> </h5>
                                    </div>
                                </div>
                            </div>
                                
                        @endforeach
                       
            
                
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>
 
