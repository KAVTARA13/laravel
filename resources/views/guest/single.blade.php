@extends("layouts.main")
@section('content')
    <!-- header area start -->
@include("inc.header")
     <!-- breadcrumb area start -->
    <div class="breadcrumb-area mb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">
მთავარი</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> {{$products->title}}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->


    <!-- product details wrapper start -->
    <div class="product-details-main-wrapper pb-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product-large-slider mb-20">
                        <div class="pro-large-img">
                            <img src="{{$products->img}}" style="height: 500px;object-fit:contain" alt="" />
                        </div>





                    </div>
                    <div class="pro-nav">
                        <div class="pro-nav-thumb"><img src="{{$products->img}}" style="width:100%;height:100px;" alt="" /></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-details-inner">
                        <div class="product-details-contentt">
                            <div class="pro-details-name mb-10">

                                <h3>{{$products->title}}</h3>


                            </div>
                            <div class="price-box mb-15">
                                <span class="regular-price">{{$products->price}} ₾</span>
                            </div>
                            <div class="product-detail-sort-des pb-20">


                                <p></p>

                            </div>
                            <div class="pro-details-list pt-20">
                                <ul>



                                    <li style="color: #83b71c;"><span>საწყობში:</span>@if ( ($products->inStock) >0)
                                    	კი
                                    @else
                                    	არა
                                    @endif
                                     </li>


                                    <li style="color:red"><span>შტრიხკოდი:</span>{{$products->code}}</li>
                                    <li><span>ბრენდი:</span><a href="#">{{$products->brand}}</a></li>

                                    <li><span>ტიპი:</span>{{$products->type}}</li>
                                    <li><span>მოდელი:</span>{{$products->model}}</li>
                                    <li><span>კალიბრი:</span>{{$products->caliber}} win</li>
                                    <li><span>წონა(კგ):</span>{{$products->weight}}</li>
                                    <li><span>ლულის სიგრძე(სმ):</span>{{$products->length}}</li>

                                    <li><span>ვაზნების რაოდენობა:</span>{{$products->cartridgeNumber}}</li>
                                    <li><span>მწარმოებელი:</span>{{$products->manufacturer}}</li>
                                    <li><span>მჭიდი:</span>{{$products->tight}}</li>
                                </ul>
                                <div class="media">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="readers_comment">
@guest
@else
<div class="entity_comment_from">
        <form method="POST" action="{{route('comment')}}">
            @csrf
            <input type="hidden" name="product_id" value="{{$products->id}}">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group comment">
                <textarea class="form-control" name="comment" placeholder="Comment"></textarea>
            </div>

            <button type="submit" class="btn btn-submit red">Submit</button>
        </form>
    </div>
@endguest

<div class="entity_inner__title header_purple">
        <h4>Readers Comment</h4>
    </div>
    @foreach ($comments as $comm)
            <div class="card p-2 mt-4">
                <div class="card-title">
                    <br class="media-heading"><a href="#">{{$comm->name}}</a></br>
                {{$comm->comment}}
                </div>
                <small>{{$comm->created_at}}</small>
            </div>
        @endforeach
    
</div>
        </div>
    </div>
@include("inc.footer")
@endsection