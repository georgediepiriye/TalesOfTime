<div class="attr-nav">
    <ul>
       
        <li class="side-menu"><a href="{{ route('product.cart') }}">
         <span ><b style="font-size: 16px !important;">Cart</b></span>   
        <i class="fa fa-shopping-bag"></i>
            <span class="badge">@if (Cart::count()>0)
                {{ Cart::count() }}
            @endif</span>
    </a></li>
    </ul>
</div>