 <div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-left">
            <img src="images/banner-1.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> TalesofTime</strong></h1>
                        <p class="m-b-40">Style Created with Time...</p>
                        <p><a class="btn hvr-hover" href="{{ route('shop') }}">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="images/banner-2.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> TalesofTime</strong></h1>
                        <p class="m-b-40">Style Created with Time...</p>
                        <p><a class="btn hvr-hover" href="{{ route('shop') }}">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-right">
            <img src="images/banner-3.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> TalesofTime</strong></h1>
                        <p class="m-b-40">Style Created with Time...</p>
                        <p><a class="btn hvr-hover" href="{{ route('shop') }}">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class="categories-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1> Brands</h1>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('images/gen1.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="{{ route('products.brand',['brand_slug'=>'geneva']) }}">Geneva</a>
                </div>
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('images/ab1.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="{{ route('products.brand',['brand_slug'=>'angela-bos']) }}">Angela Bos</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('images/bao1.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="{{ route('products.brand',['brand_slug'=>'baogela']) }}">Baogela</a>
                </div>
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('images/fn1.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="{{ route('products.brand',['brand_slug'=>'fngeen']) }}">Fngeen</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('images/mc1.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="{{ route('products.brand',['brand_slug'=>'michael-kors']) }}">Michael Kors</a>
                </div>
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ asset('images/sk1.jpg') }}" alt="" />
                    <a class="btn hvr-hover" href="{{ route('products.brand',['brand_slug'=>'skone']) }}">Skone</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Brands -->

<!-- Start Products  -->
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
                <div class="col-lg-3 col-md-6 special-grid top-featured">
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
                                <a class="cart" href="#" wire:click.prevent='store({{ $featured_product->id }},"{{ $featured_product->name }}",{{ $featured_product->price }})'>Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{ $featured_product->name }}</h4>
                            <h5><b> ₦{{ number_format($featured_product->price) }}</b> </h5>
                        </div>
                    </div>
                </div>
                    
            @endforeach
           

    
        </div>
    </div>
</div>
<!-- End Products  -->

<!-- Start Blog  -->
<div class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Latest Products</h1>
                    
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($latest_products as $latest_product )
                <div class="col-lg-3 col-md-6 ">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{ $latest_product->image1 }}" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="{{ route('product.details',['product_slug'=>$latest_product->slug]) }}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <a class="cart" href="#" wire:click.prevent='store({{ $latest_product->id }},"{{ $latest_product->name }}",{{ $latest_product->price }})'>Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{ $latest_product->name }}</h4>
                            <h5>₦{{ number_format($latest_product->price) }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
           

        </div>
    </div>
</div>

