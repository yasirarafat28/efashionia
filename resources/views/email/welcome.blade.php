
@extends('layouts.email')
@section('content')

    <h2 style="font-weight: 500;font-size: 20px;form-group">Hello, {{$user->name??''}}!</h2>

    <p style="font-weight: 400;form-group">Thanks for your registration on <a href="https://www.efashionia.com">www.efashionia.com</a>.</p>

    <p style="font-weight: 400;form-group">Your registration completed successfully and you are a merchant on efashionia now. Don't forget to send us your product data feed for advertising your products on efashionia.</p>

    <p style="font-weight: 400;form-group">Please <a href="{{url('information/contact')}}" class="">contact us</a> for more information.</p>


    <p style="font-weight: 400;form-group">Thanks</p>
    <p style="font-weight: 400;form-group">efashionia</p>
    <br>
@endsection
