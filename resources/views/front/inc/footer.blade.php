
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
							{{-- <li><a target="_blank"  href="https://www.linkedin.com/company/efashionia/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> --}}
							<li><a target="_blank" href="https://www.youtube.com/channel/UC_ICb9RyGPlg9I8O4_2Hy8w"><i class="fa fa-youtube" aria-hidden="true"></a></li>

{{--
                            <li><a target="_blank"  href="https://www.linkedin.com/company/efashionia/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a target="_blank" href="http://www.pinterest.com/efashionia"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="http://www.youtube.com/forevernewclothing"><i class="fa fa-youtube" aria-hidden="true"></a></li> --}}
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
