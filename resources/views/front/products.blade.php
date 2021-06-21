
@extends('layouts.app')
@section('content')


<style>
    .product-layout.product-list .product-thumb .caption{
        width:55% !important;
        float:left;
    }

    .product-layout.product-list .product-thumb .price.list-price{
        text-align:right !important;
    }

    .product-layout.product-list .product-thumb .caption .title-wrap{
        width:100% !important;
        display:flex;
    }

    .product-layout.product-list .product-thumb .caption .title-wrap h4{
        width:80% !important;
    }
    .product-layout.product-list .product-thumb .caption .title-wrap p{
        width:20% !important;
    }

    .product-layout.product-list .product-thumb .button-groups{
        width:25% !important;
        float:left;
        text-align: right;
    }
    .product-layout.product-list .product-thumb .image img{
        height:180px !important;
        width:180px !important;
    }
</style>
<div id="container">
    <div class="container">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Product</a></li>
            @if(isset($keyword))
                <li class="active"><a href="">{{$keyword}}</a></li>
            @endif
        </ul>
        <!-- Breadcrumb End-->
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-12">

                <div class="product-filter">
                    <form class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="btn-group">
                                <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                                <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                            </div>
                            <a href="compare.html" id="compare-total">Product Compare (0)</a>
                        </div>
                        <div class="col-sm-2 text-right">
                            <label class="control-label" for="input-sort">Sort By:</label>
                        </div>
                        <div class="col-md-3 col-sm-2 text-right">
                            <select id="input-sort" class="form-control col-sm-3" name="filter" onchange="this.form.submit();">
                                <option value="" selected="selected">Default</option>
                                <option {{isset($_GET['filter']) && $_GET['filter']=='title_ASC'?'selected':''}} value="title_ASC">Name (A - Z)</option>
                                <option {{isset($_GET['filter']) && $_GET['filter']=='title_DESC'?'selected':''}} value="title_DESC">Name (Z - A)</option>
                                <option {{isset($_GET['filter']) && $_GET['filter']=='price_ASC'?'selected':''}} value="price_ASC">Price (Low &gt; High)</option>
                                <option {{isset($_GET['filter']) && $_GET['filter']=='price_DESC'?'selected':''}} value="price_DESC">Price (High &gt; Low)</option>
                            </select>
                        </div>
                        <div class="col-sm-1 text-right">
                            <label class="control-label" for="input-limit">Show:</label>
                        </div>
                        <div class="col-sm-2 text-right">
                            <select id="input-limit" class="form-control" name="limit" onchange="this.form.submit();">
                                <option value="20" selected="selected">20</option>
                                <option {{isset($_GET['limit']) && $_GET['limit']=='25'?'selected':''}} value="25">25</option>
                                <option {{isset($_GET['limit']) && $_GET['limit']=='50'?'selected':''}} value="50">50</option>
                                <option {{isset($_GET['limit']) && $_GET['limit']=='75'?'selected':''}} value="75">75</option>
                                <option {{isset($_GET['limit']) && $_GET['limit']=='100'?'selected':''}} value="100">100</option>
                            </select>
                        </div>
                    </form>
                </div>
                <br />


                <div class="row products-category">

                    @forelse($products as $key=>$item)
                        <div class="product-layout product-list col-sm-12">
                            <div class="product-thumb">
                                <div class="image"><a href="#" data-toggle="modal" data-target="#productModal{{$item->id}}"><img src="{{asset($item->image??'')}}" onerror="this.onerror=null;this.src='https://cdn.samsung.com/etc/designs/smg/global/imgs/support/cont/NO_IMG_600x600.png';" title=" {{$item->title}} " class="img-responsive" /></a></div>
                                <div>
                                    <div class="caption">

                                        <div class="title-wrap">
                                            <h4>
                                                <a href="#" data-toggle="modal" data-target="#productModal{{$item->id}}">{{$item->title}} </a>
                                            </h4>
                                            <p class="price list-price" style="font-size: 20px;">


                                                @if($item->discount)
                                                    <span class="price-new">$ {{$item->price- $item->discount}}</span>
                                                    <span class="price-old">$ {{$item->price}}</span>
                                                    <span class="saving">-{{(($item->discount/$item->price)*100)??0}}%</span>
                                                @else
                                                    <span class="price-new">$ {{$item->price}}</span>
                                                @endif
                                            </p>
                                        </div>
                                        <p class="description"> {{substr(strip_tags($item->description),0,200)}} ...</p>
                                        <p class="price grid-price" style="font-size: 20px;display:none">


                                            @if($item->discount)
                                                <span class="price-new">$ {{$item->price- $item->discount}}</span>
                                                <span class="price-old">$ {{$item->price}}</span>
                                                <span class="saving">-{{(($item->discount/$item->price)*100)??0}}%</span>
                                            @else
                                                <span class="price-new">$ {{$item->price}}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="button-groups">
                                        <div style="margin-bottom: 10px;">
                                            <img src="{{asset($item->merchant->logo)}}" alt="" class="main-btn add-to-cart" style="width: 50%;max-height:60px;">
                                        </div>
                                        <button class="btn btn-primary" style="padding-left: 15%; padding-right: 15%;" type="button" onclick="ProductRedirect({{$item->id}})"><span><i class="fa fa-shopping-cart" ></i>  Buy Now</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty


                    <div class="col-sm-12 text-center">
                        <h4 class="text-danger"> <i class="fa fa-warning"></i> Sorry! No product found</h4>
                    </div>


                    @endforelse
                </div>
                <div class="row">
                    <div class="pull-right">

                        <div class="text-left">
                            {!! $products->render() !!}
                        </div>

                    </div>
                </div>
            </div>
            <!--Middle Part End -->
        </div>
    </div>
</div>

@foreach($products as $key=>$item)


    <!--Modal -->
    <div class="modal fade" id="productModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-success">
                    <h5 class="modal-title" id="exampleModalLabel">{{$item->title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="product product-details clearfix">
                        <div class="col-md-6">
                            <div id="product-main-view">
                                <img src="{{$item->image ? $item->image : asset('img/default-image.jpg')}}" alt="" style="max-width: 90%;display: block;margin:0 auto;">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="product-body">
                                <h4 class="product-name">{{$item->title}}</h4>
                                <h3 class="product-price">
                                    @if($item->discount)
                                        $ {{$item->price- $item->discount}}
                                        <del class="product-old-price">  $ {{$item->price}}</del>
                                    @else
                                        $ {{$item->price}}
                                    @endif

                                </h3>
                                <p><strong>Shop :</strong> {{$item->merchant->name}}</p>
                                <img src="{{asset($item->merchant->logo)}}" alt="{{$item->merchant->name}}" title="{{$item->merchant->name}}" style="width: 120px;">
                                <p>{{$item->description}}</p>

                                <br>

                                <div class="product-btns">
                                    <button class="main-btn add-to-cart"><i class="fa fa-heart"> Wishlist</i></button>
                                <!--<a class="primary-btn add-to-cart" target="_blank" href="{{$item->url}}"><i class="fa fa-shopping-cart"></i> Buy Now</a>-->
                                    <a class="btn btn-primary" style="padding-left: 20%; padding-right: 20%;" onclick="ProductRedirect({{$item->id}})"><i class="fa fa-shopping-cart" ></i> Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

@endforeach



@endsection
