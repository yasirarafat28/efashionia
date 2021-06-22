<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="@if(isset($keyword) )Compare prices for {{ucwords($keyword)}} from thousands of online stores in United States. Find the best deal for {{ucwords($keyword)}} before buy.
    @else
    	efashionia is the top marketplace and price comparison shopping guide in United States. Compare prices from thousands of online shops for all kind of fashion, apparel and others beauty care products. | efashionia
    @endif ">

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
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontNew/js/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontNew/css/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontNew/css/stylesheet.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontNew/css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontNew/css/owl.transitions.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontNew/css/responsive.css')}}" />
    <!-- CSS Part End-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132343544-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-132343544-1');
    </script>

    <style>
        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0,0,0,.03);
            border-bottom: 1px solid rgba(0,0,0,.125);
        }
        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }
    </style>
</head>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop" style="display: none">
            <div class="container">
                <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <!--<li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>-->
                                <li class="email"><a href="mailto:support@efashionia.com"><i class="fa fa-envelope"></i>support@efashionia.com</a></li>

                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            <li><a href="{{url('merchant/login')}}">Login</a></li>
                            <li><a href="{{url('merchant/register')}}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row" style="background-color: aliceblue;">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-12 col-xs-12 inner">
                        <div id="logo" style="padding: 5px 0px;"><a href="{{url('/')}}"><img  class="img-responsive" src="{{asset('images/logo.png')}}" title="efashionia.com" alt="Logo of efashionia" style="height: 100px;" /></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart End-->
                    <!-- Search Start-->
                    <div class="col-table-cell col-lg-9 col-md-9 col-sm-12 col-xs-12 inner">
                        <form method="POST" action="{{route('searchSubmit')}}">
                            {{csrf_field()}}
                            <div id="search" class="input-group">
                                <input id="filter_name" type="text" name="search" placeholder="Find the best price and save money" value="{{isset($keyword) ? $keyword : ''}}" autocomplete="false"class="form-control input-lg" />
                                <button type="submit" onclick="this.form.submit();" class="button-search" ><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- Search End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main Menu Start-->

        <nav id="menu" class="navbar">
            <div class="navbar-header"> <span class="visible-xs visible-sm"> Categories <b></b></span></div>
            <div class="container">
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="Home" href="{{url('/')}}">Home</a></li>

                        <?php
                        $nav_categories = App\Category::where('status','active')->where('type','nav')->where('level',1)->get();
                        $side_categories = App\Category::where('status','active')->where('type','left_side')->where('level',1)->get();
                        ?>

                        @foreach($nav_categories as $key=>$nav)
                            <?php
                            $sub_categories = App\Category::CategoryListByParent($nav->id);
                            ?>

                            @if(sizeof($sub_categories)>0)

                                <li class="menu_brands dropdown"><a href="#">{{$nav->title}} </a>
                                    <div class="dropdown-menu">
                                        @foreach($sub_categories as $sub_category)
                                            <fieldset>
                                                <legend class="scheduler-border"><a href="{{url($sub_category->url)}}">{{$sub_category->title}}</a></legend>
                                                <?php
                                                $sub_sub_categories = App\Category::CategoryListByParent($sub_category->id);
                                                ?>

                                                <div class="clearfix">
                                                    @if(sizeof($sub_sub_categories) > 0)
                                                        @foreach($sub_sub_categories as $sub_sub_category)
                                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6 mb-2" style="height: 100px;">

                                                                <div class="col-md-12">
                                                                    <a href="{{url($sub_sub_category->url??'')}}">
                                                                        <img id="nav-category-id-{{$sub_sub_category->id}}" src="" style="width: 100%;height: 30px;"/>
                                                                    </a>
                                                                </div>
                                                                <br>
                                                                <a href="{{url($sub_sub_category->url??'')}}">{{$sub_sub_category->title}}</a>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <a href="{{url($sub_category->url??'')}}">{{$sub_category->title}}</a>
                                                    @endif

                                                </div>
                                            </fieldset>

                                        @endforeach
                                    </div>
                                </li>
                            @else
                                <li>

                                    <a href="{{url($sub_category->url)}}">{{$sub_category->title}}</a>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Menu End-->
    </div>


    @yield('content')



<footer id="footer">
    <div class="fpart-first">
        <div class="container">
            <div class="row">
                {{-- <div class="contact col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <h5>About efashionia.Com</h5>
                    <p class="text-justify">efashionia is the top price comparison based shopping guide in USA. It has been working to reach you to the thousands of online shops that can help you to find out the best price from all of the high profile competitors for fashion, apparel and others beauty care products.</p>
                </div> --}}
                <div class="column col-lg-3 col-md-3 col-xs-12">
                    <h5>User Area</h5>
                    <ul>
                        <li><a href="#">User Registration</a></li>
                        <li><a href="#">Special Deals</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a target="_blank" ref="nofollow" href="https://www.trustpilot.com/review/efashionia.com">Feedback</a></li>
                    </ul>
                </div>
                <div class="column col-lg-3 col-md-3 col-xs-12">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="{{url('information/about')}}">About Us</a></li>
                        <li><a href="{{url('information/contact')}}">Contact Us</a></li>
                        <li><a href="{{url('information/term')}}">Terms & Condition</a></li>
                        {{-- <li><a href="{{url('information/privacy')}}">Privacy Policy</a></li>
                        <li><a href="{{url('information/faq')}}">FAQ</a></li> --}}
                        <li><a href="/sitemap.xml">Sitemap</a></li>
                    </ul>
                </div>
                <div class="column col-lg-3 col-md-3 col-xs-12">
                    <h5>Merchant Area</h5>
                    <ul>
                        {{-- <li><a href="{{url('merchant/account')}}">My Account</a></li> --}}
                        <li><a href="{{url('merchant/login')}}">Merchant Login</a></li>
                        <li><a href="{{url('merchant/register')}}">Merchant  Registration</a></li>
                        <li><a href="#">Payment Procedure</a></li>
                        <li><a href="/data-feed-sample.xml" target="_blank">Data Feed Sample</a></li>
                        {{-- <li><a href="{{url('merchant/products')}}">Products</a></li> --}}
                    </ul>
                </div>
                <div class="column col-lg-3 col-md-3 col-xs-12">
                    <h5>Stay Connected</h5>
                    <p>Join our Newsletter for future updates.
                    </p>
                    <form action="{{route('newsletterSubmit')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input class="input form-control" placeholder="Enter Email Address" name="email">
                        </div>
                        <button class="btn primary-btn">Join Newsletter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="fpart-second">
        <div class="container">
            <div id="powered" class="row clearfix" style="padding: 0px !important; margin 0px !important">
                <div class="powered_text pull-left flip col-md-4">
                    <p>All right reserved ©<a href="{{url('')}}">efashionia</a> {{date("Y")}}
                        {{-- <a href="#">efashionia</a> --}}
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <a href="//www.dmca.com/Protection/Status.aspx?ID=95fb07cb-560c-41f3-9c80-e005d1ad382c" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=95fb07cb-560c-41f3-9c80-e005d1ad382c"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                </div>
                <div class="col-md-4">


                    <style>
                        .footer_social
                        {
                            margin-top: 0px;
                        }
                        .footer_social ul li
                        {
                            display: inline-block;
                            width: 35px;
                            height: 35px;
                            background: #4b505d;
                            border-radius: 50%;
                            -webkit-transition: all 200ms ease;
                            -moz-transition: all 200ms ease;
                            -ms-transition: all 200ms ease;
                            -o-transition: all 200ms ease;
                            transition: all 200ms ease;
                        }
                        .footer_social ul li:not(:last-child)
                        {
                            margin-right: 6px;
                        }
                        .footer_social ul li a
                        {
                            display: block;
                            position: relative;
                            text-align: center;
                            font-size: 18px !important;
                        }
                        .footer_social ul li a i
                        {
                            color: #FFFFFF;
                            line-height: 38px;
                        }
                        .footer_social ul li:hover
                        {
                            background: #14bdee;
                        }
                    </style>
                    <div class="footer_social text-right">

						<ul>
                            <li><a target="_blank"  href="https://www.facebook.com/efashionia"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            {{-- <li><a href="/front/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> --}}
                            <li><a target="_blank" href="https://www.instagram.com/efashionia/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a target="_blank"  href="https://twitter.com/efashionia"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="http://www.pinterest.com/efashionia"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a target="_blank"  href="https://www.linkedin.com/company/efashionia/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							{{-- <li><a target="_blank" href="https://www.youtube.com/channel/UC_ICb9RyGPlg9I8O4_2Hy8w"><i class="fa fa-youtube" aria-hidden="true"></a></li> --}}
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
</footer>


<div id="reviewTabWidget"><div id="reviewTabWidgetInner" class="stjr-widget"></div></div><script>(function(d,s,id,c){var js,r=0,t=d.getElementsByTagName(s)[0];js=d.createElement(s);js.id=id;js.src='https://static.sitejabber.com/js/widget.min.1621958554.js';js.onload=js.onreadystatechange=function(){if(!r&&(!this.readyState||this.readyState[0]=='c')){r=1;c();}};t.parentNode.insertBefore(js,t);}(document,'script','sj-widget',function(){new STJR.ReviewTabWidget({id:'reviewTabWidget',url:'efashionia.com'}).render();}));</script>

<script type="text/javascript" src="{{asset('frontNew/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontNew/js/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontNew/js/jquery.easing-1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontNew/js/jquery.dcjqaccordion.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontNew/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontNew/js/custom.js')}}"></script>

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
<script type="text/javascript">

    $(window).on('load', function() {

        GetCategoryImage();

    });


    function GetCategoryImage()
    {
        $.ajax({
            type: "POST",
            url: "{{ route('GetCategoryImage') }}",
            data: {
                "_token": "{{ csrf_token() }}",
            },
            success: function (data) {
                jQuery.each(data, function(index, item) {
                    if (item.image) {
                        $('#nav-category-id-'+item.id).attr('src', '/'+item.image);
                    }else{
                        $('#nav-category-id-'+item.id).attr('src', '/images/NO_IMG.png');
                    }

                });

            },

            error: function (error) {
                console.log(error);
            },
        })
    }
</script>

</body>
</html>
