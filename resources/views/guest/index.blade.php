  
@extends("layouts.main")
@section('content')
    <!-- header area start -->
@include("inc.header")
    <!-- header area end -->

   
                                                @foreach ($products as $product)
                                                <div class="product-item ">
                                                    <div class="product-thumb">
                                                        <a href="{{ route('name',['id'=>$product->id]) }}">
                                                                <img src="{{$product->img}}" alt="{{$product->brand}}" style="height:200px;object-fit:contain">
                                                            </a>
                                                    </div>
                                                    <div class="product-caption newProduct">
                                                        <div class="manufacture-product">
                                                            <p>

                                                                {{$product->brand}}

                                                            </p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="{{ route('name',['id'=>$product->id]) }}">{{$product->title}}</a></h4>
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
                                                @endforeach
                                            
@include("inc.footer")
@endsection