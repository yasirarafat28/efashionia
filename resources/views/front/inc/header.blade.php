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
