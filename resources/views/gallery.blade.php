@extends('layouts.user')
@section('title')
Galeri
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
                                    <h1><strong>Lihat Galeri Kami</strong></h1>
                                    <h2 style="font-weight:bolder;">#keadilanfirst</h2>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div class="site-section">
    <div class="container">
        <div class="row">
            @foreach ($g as $gl)
            <div class="col-sm-6 col-md-6 col-lg-4">
                <a href="{{ asset('gallery/images/'.$gl->pic) }}" class="image-popup gallery-item"><img src="{{ asset('gallery/images/'.$gl->pic) }}" alt="Image" class="img-responsive" style="border: 5px solid #3F52E3;"></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
