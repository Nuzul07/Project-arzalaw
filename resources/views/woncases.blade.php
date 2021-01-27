@extends('layouts.user')
@section('title')
Kasus Selesai
@endsection
@section('content')
<aside id="ftco-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url('{{ asset('lawmaker/images/hero_1.jpg')}}');">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <center>
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h1><strong>Kasus Yang Kami Tangani</strong></h1>
                                    <h2 style="font-weight:bolder;">#keadilanfirst</h2>
                                </div>
                        </center>
                    </div>
                </div>
    </div>
    </li>
    </ul>
    </div>
</aside>

<div id="ftco-blog">
    <div class="container">
        <div class="row">
            @foreach($dk as $dks)
            <div class="col-md-6 col-lg-4">
                <div class="blog-featured blog-entry animate-box">
                    <a href="blog-single.html"><img class="img-responsive img-rounded" src="{{ asset('dk/images/'.$dks->pic) }}" style="border: 5px solid #3F52E3;"></a>
                    <h2>{{$dks->nama}}</h2>
                    <p class="meta"><span>{{$dks->tgl}}</p>
                    <strong>Hasil: {{$dks->hasil}}</strong>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
