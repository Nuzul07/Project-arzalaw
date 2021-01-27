@extends('layouts.user')
@section('title')
Tentang Kami
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
                                    <h1><strong>Tentang Kami</strong></h1>
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
<br><br>
<div class="container">
    <div class="row">
        @php
        $about = \App\About::all();
        @endphp
        @foreach ($about as $a)
        <div class="col-md-6">
            <img src="{{ asset('lawmaker/images/Arza law.v1.png') }}" alt="Image" class="img-responsive img-rounded">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <br>
            <h2>{{$a->nama}}</h2>
            <p>{{{$a->isi1}}}</p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <p>{{$a->isi2}}</p>
    </div>
    @endforeach
</div>

<div id="ftco-about">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center ftco-heading">
                <h2>Pengacara Kami</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                <div class="ftco-staff">
                    @php
                    $attorney = \App\Attorney::all();
                    @endphp
                    @foreach ($attorney as $at)
                    <img src="{{ asset('attorney/images/'.$at->pic) }}" alt="Template">
                    <h3>{{$at->nama}}</h3>
                    <strong class="role">{{$at->jabatan}}</strong>
                    <p>{{$at->pengantar}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ftco-testimonial" class="ftco-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center ftco-heading">
                <h2>Apa Yang Dikatakan Klien</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row animate-box">
                    <div class="owl-carousel owl-carousel-fullwidth">
                        @foreach($r as $rate)
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <h3>{{$rate->nama}}</h3>
                                <blockquote>
                                    <p>&ldquo;{{$rate->ulasan}}&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
