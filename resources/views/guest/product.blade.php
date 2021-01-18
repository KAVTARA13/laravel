 @extends("layouts.main")
@section('content')
 @include("inc.header")
  <!-- shop page main wrapper start -->
    <div class="main-wrapper pt-35">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 order-first order-lg-last colx">
                    <div class="product-shop-main-wrapper mb-50 ">
                        <div class="shop-product-wrap grid row aligned-row">
                            @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-item mb-30">
                                    <div class="product-thumb">
                                        <a href="{{ route('name',['id'=>$product->id]) }}">
                                                <img src="{{$product->img}}" class="pri-img w-100" alt="{{$product->brand}}" style="height: 285px;object-fit:contain">
                                            </a>
                                    </div>
                                    <div class="product-caption newProduct">
                                        <div class="manufacture-product">
                                            <p>

                                                {{$product->brand}}

                                            </p>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="{{ route('name',['id'=>$product->id]) }}">{{$product->title}} </a></h4>
                                        </div>
                                        <div class="ratings">
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                        </div>
                                        <div class="price-box priceToBottom">
                                            <span class="regular-price">{{$product->price}} ₾</span>

                                        </div>







                                    </div>
                                </div>
                                <!-- end single grid item -->
                            </div>
                            @endforeach
                            
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @include("inc.footer")
@endsection