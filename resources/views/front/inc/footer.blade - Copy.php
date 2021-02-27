
<!-- FOOTER -->
<footer id="footer" class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a class="logo" href="#"  style="width: 100%;">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </a>
                    </div>
                    <!-- /footer logo -->

                    <p>E Fashionia is the top price comparison based shopping guide in USA. It has been working to reach you to the thousands of online shops that can help you to find out the best price from all of the high profile competitors for fashion, apparel and others beauty care.</p>

                    <!-- footer social -->
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                    <!-- /footer social -->
                </div>
            </div>
            <!-- /footer widget -->

            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Merchant Area</h3>
                    <ul class="list-links">
                        <li><a href="{{url('merchant/account')}}">My Account</a></li>
                        <li><a href="{{url('merchant/login')}}">Login</a></li>
                        <li><a href="{{url('merchant/register')}}">Register</a></li>
                        <li><a href="{{url('merchant/products')}}">Products</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->

            <div class="clearfix visible-sm visible-xs"></div>

            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Information</h3>
                    <ul class="list-links">
                        <li><a href="{{url('information/about')}}">About Us</a></li>
                        <li><a href="{{url('information/contact')}}">Contact Us</a></li>
                        <li><a href="{{url('information/term')}}">Terms & Condition</a></li>
                        <li><a href="{{url('information/privacy')}}">Privacy Policy</a></li>
                        <li><a href="{{url('information/faq')}}">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->

            <!-- footer subscribe -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Stay Connected</h3>
                    <p>Deals, Steals, and Style Ideas delivered to your inbox regularly.
                    </p>
                    <form action="{{route('newsletterSubmit')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input class="input" placeholder="Enter Email Address" name="email">
                        </div>
                        <button class="primary-btn">Join Newslatter</button>
                    </form>
                </div>
            </div>
            <!-- /footer subscribe -->
        </div>
        <!-- /row -->
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <!-- footer copyright -->
                <div class="footer-copyright">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a
                            href="{{url('/')}}">Efashionia.com</a></div>
                <!-- /footer copyright -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/slick.min.js')}}"></script>
<script src="{{asset('front/js/nouislider.min.js')}}"></script>
<script src="{{asset('front/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>

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

</body>

</html>
