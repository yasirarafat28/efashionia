
@extends('layouts.app')
@section('content')
<section class="section-content padding-y">
    <div class="container">

    <header class="section-heading">
        <h2 class="section-title">{{isset($content->title) ? $content->title : ''}} </h2>
    </header><!-- sect-heading -->

    <article>



        {!!isset($content->description) ? $content->description : ''!!}

    </article>

    </div> <!-- container .//  -->
    </section>


@endsection
