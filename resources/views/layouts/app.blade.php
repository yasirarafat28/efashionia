<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link href="images/favicon.ico" rel="icon" />

    <meta name='keywords' content='efashionia.com, Fashion, Clothing, Appearel, Cosmetics, Makeup, Jewelry, {{isset($keyword) ?$keyword: ''}}, {{isset($keyword_entry->relative_keyword)? $keyword_entry->relative_keyword:''}}'>
    <meta name='subject' content="{{App\Setting::setting()->tagline}}">

    <meta name='url' content='{{Illuminate\Support\Facades\URL::current()}}'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>

    <title>
        @if(isset($inner_page) && $inner_page)
            {{$inner_page}}
        @elseif(isset($meta_title) && $meta_title)
            {{$meta_title}} | {{App\Setting::setting()->tagline}}
        @else

            @if(isset($keyword))
                Compare Price For Best {{$keyword}} Before Shopping
            @else
                {{App\Setting::setting()->tagline}}
            @endif
        @endif
        | efashionia
    </title>

    <!-- jQuery -->
    <script src="/front/asset/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="/front/asset/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="/front/asset/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Font awesome 5 -->
    <link href="/front/asset/all.min.css" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="/front/asset/ui.css" rel="stylesheet" type="text/css">
    <link href="/front/asset/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)">

    <!-- custom javascript -->
    <script src="/front/asset/script.js" type="text/javascript"></script>

    <script type="text/javascript">
    /// some script

    // jquery ready start
    $(document).ready(function() {
        // jQuery code

    });
    // jquery end
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132343544-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-132343544-1');
    </script>

    @yield('style')

</head>
<body data-new-gr-c-s-check-loaded="14.1016.0" data-gr-ext-installed="" style="">


<header class="section-header">

<nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container">
    <ul class="navbar-nav d-none d-md-flex mr-auto">
		<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Delivery</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Payment</a></li>
    </ul>
    <ul class="navbar-nav">
		<li class="nav-item"><a href="#" class="nav-link"> Call: +99812345678 </a></li>
		<li class="nav-item dropdown">
		 	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> English </a>
		    <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
				<li><a class="dropdown-item" href="#">Arabic</a></li>
				<li><a class="dropdown-item" href="#">Russian </a></li>
		    </ul>
		</li>
	</ul> <!-- list-inline //  -->
  </div> <!-- navbar-collapse .// -->
 <!-- container //  -->
</nav> <!-- header-top-light.// -->

<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-2 col-6">
		<a href="http://bootstrap-ecommerce.com/" class="brand-wrap">
			<img class="logo" src="/front/asset/logo.png">
		</a> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-12 col-sm-12">
		<form action="#" class="search">
			<div class="input-group w-100">
			    <input type="text" class="form-control" placeholder="Search">
			    <div class="input-group-append">
			      <button class="btn btn-primary" type="submit">
			        <i class="fa fa-search"></i>
			      </button>
			    </div>
		    </div>
		</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-4 col-sm-6 col-12">
		<div class="widgets-wrap float-md-right">
			<div class="widget-header  mr-3">
				<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
				<span class="badge badge-pill badge-danger notify">0</span>
			</div>
			<div class="widget-header icontext">
				<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
				<div class="text">
					<span class="text-muted">Welcome!</span>
					<div>
						<a href="#">Sign in</a> |
						<a href="#"> Register</a>
					</div>
				</div>
			</div>
		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->


<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
      	<li class="nav-item dropdown">
          <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> &nbsp;  All category</strong></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Foods and Drink</a>
            <a class="dropdown-item" href="#">Home interior</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Category 1</a>
            <a class="dropdown-item" href="#">Category 2</a>
            <a class="dropdown-item" href="#">Category 3</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Supermarket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Baby &amp; Toys</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fitness sport</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Furnitures</a>
        </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>

 <!-- section-header.// -->


@yield('content')


<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y">
<div class="container">

<h3 class="mb-3">Download app demo text</h3>

<a href="#"><img src="/front/asset/appstore.png" height="40"></a>
<a href="#"><img src="/front/asset/appstore.png" height="40"></a>

</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ======================= -->




<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top bg">
	<div class="container">
		<section class="footer-top  padding-y">
			<div class="row">
				<aside class="col-md col-6">
					<h6 class="title">Brands</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Adidas</a></li>
						<li> <a href="#">Puma</a></li>
						<li> <a href="#">Reebok</a></li>
						<li> <a href="#">Nike</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Company</h6>
					<ul class="list-unstyled">
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Career</a></li>
						<li> <a href="#">Find a store</a></li>
						<li> <a href="#">Rules and terms</a></li>
						<li> <a href="#">Sitemap</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Help</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Contact us</a></li>
						<li> <a href="#">Money refund</a></li>
						<li> <a href="#">Order status</a></li>
						<li> <a href="#">Shipping info</a></li>
						<li> <a href="#">Open dispute</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Account</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> User Login </a></li>
						<li> <a href="#"> User register </a></li>
						<li> <a href="#"> Account Setting </a></li>
						<li> <a href="#"> My Orders </a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Social</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom row">
			<div class="col-md-2">
				<p class="text-muted"> © 2019 Company name </p>
			</div>
			<div class="col-md-8 text-md-center">
				<span class="px-2">info@pixsellz.io</span>
				<span class="px-2">+879-332-9375</span>
				<span class="px-2">Street name 123, Avanue abc</span>
			</div>
			<div class="col-md-2 text-md-right text-muted">
				<i class="fab fa-lg fa-cc-visa"></i>
				<i class="fab fa-lg fa-cc-paypal"></i>
				<i class="fab fa-lg fa-cc-mastercard"></i>
			</div>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->



<script>
    function ProductRedirect(product_id)
    {
        $.ajax({
            type: "POST",
            url: "{{ route('ProductRedirect') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "product_id": product_id,
                "ip": "{{$_SERVER["REMOTE_ADDR"]}}",
            },
            success: function (data) {
                //location.reload();
                //window.location.href = data;
                window.open(data, '_blank');

            },

            error: function (error) {
                console.log(error);
            },
        })
    }
</script>
@yield('script')

</body></html>
