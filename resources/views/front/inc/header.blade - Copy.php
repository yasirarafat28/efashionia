<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="@if(isset($keyword))
    Compare prices for {{ucwords($keyword)}} from thousands of online stores in USA. Find the best deal for {{ucwords($keyword)}}  before buying
    @else
    {{App\Setting::setting()->meta_description}}
    @endif">

    <meta name='keywords' content='Efashionia, Fashion, Product, Compare Fashion Product, {{isset($keyword) ?$keyword: ''}}, {{isset($keyword_entry->relative_keyword)? $keyword_entry->relative_keyword:''}}'>
    <meta name='subject' content="{{App\Setting::setting()->tagline}}">

    <meta name='url' content='{{Illuminate\Support\Facades\URL::current()}}'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @if(isset($meta_title) && $meta_title)
            {{$meta_title}} | {{App\Setting::setting()->tagline}}
        @else

            @if(isset($keyword))
                Best {{ucwords($keyword)}} {{App\Setting::setting()->tagline}}
            @else
                {{App\Setting::setting()->tagline}}
            @endif
        @endif
            | Efashionia
    </title>
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132343544-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-132343544-1');
    </script>

    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '4602582959768102');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=4602582959768102&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>
<!-- HEADER -->

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="biz_inbox"
        page_id="266839800690239">
      </div>
<header>
    <!-- top Header -->
    <div id="top-header" style="background-color: #dfd;">
        <div class="container">
            <div class="pull-left">
                <ul class="header-top-links">
                    <li><a href="{{url('information/about')}}">ABOUT US</a></li>
                    <li><a href="{{url('information/contact')}}">CONTACT US</a></li>
                    <li><a href="{{url('information/privacy')}}">PRIVACY POLICY</a></li>
                </ul>
            </div>
            <div class="pull-right">
                <ul class="header-top-links">
                    <li><a   data-toggle="modal" data-target="#newsletterModal" >NEWSLETTER</a></li>
                    <li><a href="{{url('wishlist')}}">WISHLIST</a></li>
                    <li><a href="{{url('merchant/account')}}">MERCHANT AREA</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /top Header -->

    <!-- Newsletter Model-->
    <div class="modal" tabindex="-1" role="dialog"  id="newsletterModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Newsletter Subscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="footer-header">Stay Connected</h3>
                    <p>Deals, Steals, and Style Ideas delivered to your inbox regularly.</p>
                    <form action="{{route('newsletterSubmit')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input class="input" placeholder="Enter Email Address" name="email">
                        </div>
                        <button class="primary-btn">Join Newslatter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- News letter modal end -->

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="col-sm-2">
                <div class="header-logo">
                    <a class="logo" href="{{url('/')}}">
                        <img src="{{asset('images/logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <!-- Search -->
                <div class="header-search" style="width: 100%;">
                    <form method="POST" action="{{route('searchSubmit')}}">
                        {{csrf_field()}}
                        <input class="input search-input" type="text" name="search" placeholder="Find the best price and save money" value="{{isset($keyword) ? $keyword : ''}}" autocomplete="false">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>

            </div>

            <div class="nav-toggle col-sm-2">
                <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->

<?php
$nav_categories = App\Category::where('status','active')->where('type','nav')->where('level',1)->get();
$side_categories = App\Category::where('status','active')->where('type','left_side')->where('level',1)->get();
?>

<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav {{Request::is('home') || Request::is('/') ? '': 'show-on-click'}}">
                <span class="category-header">Categories <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    @foreach($side_categories as $key=>$nav)
                        <?php
                        $sub_categories = App\Category::CategoryListByParent($nav->id);
                        ?>
                        @if(sizeof($sub_categories)>0)
                            <li class="dropdown side-dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$nav->title}} <i class="fa fa-caret-down"></i></a>
                                <div class="custom-menu">
                                    <div class="row">
                                        @foreach($sub_categories as $sub_category)
                                            <div class="col-md-4">
                                                <ul class="list-links">
                                                    <?php
                                                    $sub_sub_categories = App\Category::CategoryListByParent($sub_category->id);
                                                    ?>
                                                    <li>
                                                        <h3 class="list-links-title">
                                                            {{$sub_category->title}}
                                                        </h3>
                                                    </li>
                                                    @if(sizeof($sub_sub_categories) > 0)
                                                        @foreach($sub_sub_categories as $sub_sub_category)
                                                            <li><a href="{{url($sub_sub_category->url)}}">{{$sub_sub_category->title}}</a></li>
                                                        @endforeach
                                                    @else
                                                        <li><a href="{{url($sub_category->url)}}">{{$sub_category->title}}</a></li>
                                                    @endif

                                                </ul>
                                                <hr class="hidden-md hidden-lg">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                        @else
                            <li><a href="{{url($nav->url)}}">{{$nav->title}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <!-- /category nav -->



            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="{{url('/')}}">Home</a></li>
                    @foreach($nav_categories as $key=>$nav)
                    <?php
                    $sub_categories = App\Category::CategoryListByParent($nav->id);
                    ?>
                        @if(sizeof($sub_categories)>0)
                        <li class="dropdown mega-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$nav->title}} <i class="fa fa-caret-down"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    @foreach($sub_categories as $sub_category)
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <?php
                                            $sub_sub_categories = App\Category::CategoryListByParent($sub_category->id);
                                            ?>
                                            <li>
                                                <h3 class="list-links-title">
                                                    {{$sub_category->title}}
                                                </h3>
                                            </li>
                                            @if(sizeof($sub_sub_categories) > 0)
                                                @foreach($sub_sub_categories as $sub_sub_category)
                                                <li><a href="{{url($sub_sub_category->url)}}">{{$sub_sub_category->title}}</a></li>
                                                @endforeach
                                            @else
                                                    <li><a href="{{url($sub_category->url)}}">{{$sub_category->title}}</a></li>
                                            @endif

                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        @else
                            <li><a href="{{url($nav->url)}}">{{$nav->title}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->
