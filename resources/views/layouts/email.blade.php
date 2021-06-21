<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <title> @yield('title') </title>
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            color: #fff;
        }
        h2,h3,h4,h5,p,ul,li,span{
            color: #fff;
            line-height: 1.5;
        }
        a {
            font-size: 14px;
        }
        table {
            margin: 0 auto;
        }
        .socials{}
        .socials a{
            display: inline-block;
            margin-right: 10px;
        }
        .socials a img{
            width: 20px;
        }
    </style>
</head>

<body>
<table style="max-width: 800px; width: 100%; ;" cellspacing="0" cellpadding="0" border="0">
<!--<table style="max-width: 800px; width: 100%; background-color: #ddd;" cellspacing="0" cellpadding="0" border="0">-->
    <tr>
        <td>
            <!-- Header Section Start -->
            <table width="100%" cellspacing="0" cellpadding="0" border="0"
                   style="padding: 30px;">
                <tr style="vertical-align: bottom;">
                    <td>
                        <a href=""><img src="https://i.imgur.com/qqKtCko.png" style="width: 200px;" ></a>
                    </td>
                    <td style="text-align: right;">

                    </td>
                </tr>
            </table>
            <!-- Header Section End -->

            <!-- Body Section Start -->
            <table
                style="padding: 0px 30px 40px 30px;height: auto"
                width="100%" cellspacing="0" cellpadding="0" border="0">
                <tr valign="top">
                    <td>
                        @yield('content')

                    </td>
                </tr>
            </table>
            <!-- Body Section End -->

            <!-- Footer Section Start -->
            <table width="100%" height="200px" cellspacing="0" cellpadding="0" border="0"
                   style="position:relative;background-color:#0F082B;padding: 30px 0px;">
                <tr style="text-align: center">
                    <td>
                        <a href="">
                            <img src="https://i.imgur.com/qqKtCko.png" style="width: 200px;" >
                        </a>
                    </td>
                </tr>
                <tr style="text-align: center">
                    <td>
                        <div style="padding-bottom: 20px;">
                            <a style="color: #fff;text-decoration: none;margin:10px 5px 0 5px;display: inline-block;"
                               href="{{url('about')}}">About us</a>

                            <a style="color: #fff;text-decoration: none;margin:10px 5px 0 5px;display: inline-block;" href="{{url('about')}}">Contact us</a>
                        </div>
                    </td>
                </tr>
                <tr style="text-align: center">

                    <td>
                        <div class="socials">
                            <a href="https://web.facebook.com/skoolio.xyz" target="_blank">
                                <img src="https://i.imgur.com/VSh6spe.png" >
                            </a>
                            <a href="#" target="_blank">
                                <img src="https://i.imgur.com/0YNvlka.png" >
                            </a>
                            <a href="#" target="_blank">
                                <img src=https://i.imgur.com/nDJBH61.png" >
                            </a>
                            <a href="#" target="_blank">
                                <img src=https://i.imgur.com/ywEqGdu.png" >
                            </a>
                        </div>

                        <div style="margin-top: 30px;">
                                <span style="color: #fff;">&copy; {{date('Y')}} <a
                                        style="color: #fff;text-decoration: none;margin-top: 10px;display: inline-block;"
                                        href="{{url('/')}}">Skoolio.xyz</a>. All Rights Reserved</span>
                        </div>
                    </td>

                </tr>

                <!-- Footer Section End -->


            </table>
</body>

</html>
