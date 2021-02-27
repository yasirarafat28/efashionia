@include('front/inc/header')
  <div id="container">

    <div class="container">
      <div class="row">
        <!-- Left Part Start-->
        <aside id="column-left" class="col-sm-3 hidden-xs">

          <h3 class="subtitle">Specials</h3>
          <div class="side-item">
            @foreach(App\Product::with(['merchant' => function ($query) {                 $query->where('status','active');             }])->inRandomOrder()->take(12)->get() as $item)
              <div class="product-thumb clearfix">
                <div class="image"><a  href="#" onclick="ProductRedirect({{$item->id}})"><img src="{{asset($item->image??'')}}" onerror="this.onerror=null;this.src='{{asset('images/NO_IMG.png')}}';" title=" {{$item->title}} " class="img-responsive" /></a></div>
                <div class="caption">
                  <h4><a href="#" onclick="ProductRedirect({{$item->id}})">{{$item->title}}</a></h4>
                  <p class="price">
                    @if($item->discount)
                      <span class="price-new">$ {{$item->price- $item->discount}}</span>
                      <span class="price-old"> $  {{$item->price}}</span><!-- <span class="saving">-10%</span>-->
                    @else
                      <span class="price-new">$ {{$item->price}} </span>
                    @endif
                  </p>
                </div>
              </div>
            @endforeach

          </div>

        </aside>
        <!-- Left Part End-->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <!-- Slideshow Start-->
          <div class="slideshow single-slider owl-carousel">
              @foreach($sliders as $slider)
                  <div class="item"> <a href="{{url($slider->link)}}"><img class="img-responsive" src="{{url($slider->image)}}" alt="banner 2" style="width:100%;" /></a> </div>
              @endforeach
          </div>
          <!-- Slideshow End-->
          @foreach($carousels as $carousel)


            <!-- Categories Product Slider Start -->
            <h3 class="subtitle">{{$carousel->keyword}} - <a class="viewall" href="{{url('/')}}">view all</a></h3>
            <div class="owl-carousel latest_category_carousel">
                <?php
                $keyword = $carousel->keyword;
                if ($carousel->type=='latest')
                {
                    $products = App\Product::with(['merchant' => function ($query) {                 $query->where('status','active');             }])->where(function ($query)  use ($keyword) {
                        $query->where('title', 'like', '%' . $keyword . '%');
                    })->whereHas('merchant',function($q){
                        $q->where('status','active')
                    })->where('status','active')->orderBy('id','DESC')->take($carousel->quantity)->get();
                }
                else{
                    $products = App\Product::with(['merchant' => function ($query) {                 $query->where('status','active');             }])->where(function ($query)  use ($keyword) {
                        $query->where('title', 'like', '%' . $keyword . '%');
                    })->whereHas('merchant',function($q){
                        $q->where('status','active');
                    })->where('status','active')->inRandomOrder()->take($carousel->quantity)->get();
                }

                ?>
                @foreach($products as $key=>$item)
                    <div class="product-thumb">
                        <div class="image"><a href="#"  onclick="ProductRedirect({{$item->id}})"><img src="{{asset($item->image??'')}}" onerror="this.onerror=null;this.src='{{asset('images/NO_IMG.png')}}';" title=" {{$item->title}} " class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="#" onclick="ProductRedirect({{$item->id}})">{{$item->title}}</a></h4>
                            <p class="product-price">

                                @if($item->discount)
                                    $ {{$item->price- $item->discount}}
                                    <del class="product-old-price"> $  {{$item->price}}</del>
                                @else
                                    $ {{$item->price}}
                                @endif

                            </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <!--<div class="button-group">

                            <button class="btn-primary" type="button" onclick="ProductRedirect({{$item->id}})"><span>Buy Now</span></button>
                        </div>-->
                        <button class="btn btn-primary" type="button" onclick="ProductRedirect({{$item->id}})" style="padding-left: 15%; padding-right: 15%;"><span>Buy Now</span></button>
                    </div>
                @endforeach

            </div>
            <!-- Categories Product Slider End -->
          @endforeach






          <!-- Brand Logo Carousel Start-->
          <div id="carousel" class="owl-carousel nxt">
            @foreach(App\User::where('type','merchant')->inRandomOrder()->take(15)->get() as $merchant)
              <div class="item text-center" style="border: 1px solid #ddd;    margin: 2px 10px;"> <a href="#"><img src="{{asset($merchant->logo)}}" alt="{{$merchant->name}}" class="img-responsive" style="height: 80px;" /></a> </div>
            @endforeach
          </div>
          <!-- Brand Logo Carousel End -->
        </div>
        <!--Middle Part End-->
      </div>
    </div>
  </div>


@include('front/inc/footer')
