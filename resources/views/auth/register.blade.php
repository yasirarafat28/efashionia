
@extends('layouts.app')
@section('content')

<section class="section-conten padding-y" style="min-height:60vh">

    <!-- ============================ COMPONENT LOGIN   ================================= -->
        <div class="card mx-auto" style="max-width: 580px; margin-top:50px;">
          <div class="card-body">
          <h4 class="card-title mb-4">Sign up</h4>


          @if(session()->has('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

          @if($errors->any())
            <div class="alert alert-danger">
              {{ $errors->first() }}
            </div>
          @endif

          <form method="POST" action="{{ route('merchant-registration-submit') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="form-group ">
              <label for="name" class="form-label">Name</label>
              <input class="form-control" name="name" type="text" id="name">
            </div>
            <div class="form-group ">
              <label for="email" class="form-label">Email</label>
              <input class="form-control" name="email" type="email" id="email">
            </div>
            <div class="form-group ">
              <label for="phone" class="form-label">Phone Number</label>
              <input class="form-control" name="phone" type="text" id="phone">
            </div>
            <div class="form-group ">
              <label for="phone" class="form-label">Shop URl</label>
              <input class="form-control" name="url" type="text" id="phone">
            </div>
            <div class="row d-none">

                <div class="form-group col-md-6">
                    <label for="phone" class="form-label">Street</label>
                    <input class="form-control" name="street" type="text" id="phone">
                </div>
                <div class="form-group  col-md-6">
                    <label for="phone" class="form-label">City</label>
                    <input class="form-control" name="city" type="text" id="phone">
                </div>
            </div>
            <div class="row d-none">

                <div class="form-group  col-md-6">
                    <label for="phone" class="form-label">State</label>
                    <input class="form-control" name="state" type="text" id="phone">
                </div>
                <div class="form-group  col-md-6">
                    <label for="phone" class="form-label">Country</label>
                    <input class="form-control" name="country" type="text" id="phone">
                </div>
            </div>
            <div class="form-group  d-none">
              <label for="phone" class="form-label">Comment</label>
              <textarea name="comment" class="form-control summernote"></textarea>
            </div>
            <div class="form-group ">
              <label for="phone" class="form-label">Logo</label>
              <input class="form-control" name="logo" type="file" id="phone">
            </div>
            <div class="form-group ">
              <label for="password" class="form-label">Password</label>
              <input class="form-control" name="password" type="password" value="" id="password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Signup  </button>
            </div> <!-- form-group// -->
          </form>
          </div> <!-- card-body.// -->
        </div> <!-- card .// -->

         <p class="text-center mt-4">Don't have account? <a href="{{url('merchant/register')}}">Sign up</a></p>
         <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>


@endsection
