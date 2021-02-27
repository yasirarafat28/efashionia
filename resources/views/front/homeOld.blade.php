
@include('front/inc/header')
	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					@foreach($sliders as $slider)
					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{url($slider->image)}}" title=" Efashionia {{$slider->title}}" alt="" style="height: 450px;">
						<div class="banner-caption text-center">
							<h1>{{$slider->title}}</h1>
							<h3 class="white-color font-weak">{{$slider->sub_title}}</h3>
							<button class="primary-btn">{{$slider->link_text}}</button>
							<a href="{{url($slider->link)}}"></a>
						</div>
					</div>
					<!-- /banner -->
					@endforeach
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			@foreach($carousels as $carousel)
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">{{$carousel->keyword}}</h2>
						<div class="pull-right">
							<div class="product-slick-dots custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- Product Slick -->
				<div class="col-md-12 col-sm-6 col-xs-6">
					<div class="row">


						<!-- Product Single -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="product product-single product-hot">
									{!! $carousel->overview !!}
							</div>
						</div>
						<!-- /Product Single -->
						<?php
							$keyword = $carousel->keyword;
							if ($carousel->type=='latest')
							{
								$products = App\Product::with('merchant')->where(function ($query)  use ($keyword) {
									$query->where('title', 'like', '%' . $keyword . '%')
											->orWhere('description', 'like', '%' . $keyword . '%');
								})->where('status','active')->orderBy('id','DESC')->limit($carousel->quantity)->get();
							}
							else{
								$products = App\Product::with('merchant')->where(function ($query)  use ($keyword) {
									$query->where('title', 'like', '%' . $keyword . '%')
											->orWhere('description', 'like', '%' . $keyword . '%');
								})->where('status','active')->inRandomOrder()->limit($carousel->quantity)->get();
							}

						?>
						<div id="product-slick-{{$carousel->id}}" class="product-slick">
							@foreach($products as $key=>$item)
							<!-- Product Single -->
							<div class="product product-single">
								<div class="product-thumb text-center">
									<!--<button class="main-btn quick-view"  data-toggle="modal" data-target="#productModal{{$item->id}}"><i class="fa fa-search-plus"></i> Quick view</button>-->
									<img class="img-responsive center-block" src="{{$item->image ? $item->image : asset('img/default-image.jpg')}}" alt="" style="height: 200px;width: auto; display: block;margin:0 auto;">
								</div>
								<div class="product-body">
									<p class="product-name"><a href="#" data-toggle="modal" data-target="#productModal{{$item->id}}">{{$item->title}}</a></p>
									<div class="col-md-6  col-sm-6">
										<h3 class="product-price">
											@if($item->discount)
												$ {{$item->price- $item->discount}}
												<del class="product-old-price"> $  {{$item->price}}</del>
											@else
												$ {{$item->price}}
											@endif
										</h3>
									</div>
									<div class="col-md-6  col-sm-6" style="width: 50%;">
										<img src="{{asset($item->merchant->logo)}}" alt="" class="main-btn add-to-cart" style="width: 100%;">
									</div>
									<div class="clearfix"></div>
									<div class="product-btns">
										<button class="main-btn add-to-cart"><i class="fa fa-heart"> Wishlist</i></button>
										<a class="primary-btn add-to-cart"  onclick="ProductRedirect({{$item->id}})"><i class="fa fa-shopping-cart"></i> Buy Now</a>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							@endforeach
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->

			@endforeach

		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
@include('front/inc/footer')