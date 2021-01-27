@extends('layouts.user')
@section('title')
Pelayanan
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
                                    <h1><strong>Pelayanan</strong></h1>
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
<div class="ftco-practice">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center ftco-heading">
                <h2>Perihal Yang Bisa Kami Bantu</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="far fa-credit-card"></i>
                    </span>
                    <div class="desc">
                        @php
                        $services = \App\Service::where('id', 1)->get();
                        @endphp
                        @foreach ($services as $s)
                        <h3><a>{{$s->judul}}</a></h3>
                        <p>{{$s->isi}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </span>
                    <div class="desc">
                        @php
                        $services = \App\Service::where('id', 2)->get();
                        @endphp
                        @foreach ($services as $s)
                        <h3><a>{{$s->judul}}</a></h3>
                        <p>{{$s->isi}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="fas fa-scroll"></i>
                    </span>
                    <div class="desc">
                        @php
                        $services = \App\Service::where('id', 3)->get();
                        @endphp
                        @foreach ($services as $s)
                        <h3><a>{{$s->judul}}</a></h3>
                        <p>{{$s->isi}}</p><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </span>
                    <div class="desc">
                        @php
                        $services = \App\Service::where('id', 4)->get();
                        @endphp
                        @foreach ($services as $s)
                        <h3><a>{{$s->judul}}</a></h3>
                        <p>{{$s->isi}}</p><br>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="fas fa-baby"></i>
                    </span>
                    <div class="desc">
                        @php
                        $services = \App\Service::where('id', 5)->get();
                        @endphp
                        @foreach ($services as $s)
                        <h3><a>{{$s->judul}}</a></h3>
                        <p>{{$s->isi}}</p><br>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="fas fa-handshake-alt-slash"></i>
                    </span>
                    <div class="desc">
                        @php
                        $services = \App\Service::where('id', 6)->get();
                        @endphp
                        @foreach ($services as $s)
                        <h3><a>{{$s->judul}}</a></h3>
                        <p>{{$s->isi}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="fas fa-user-tie"></i>
                    </span>
                    <div class="desc">
                        @php
                        $services = \App\Service::where('id', 7)->get();
                        @endphp
                        @foreach ($services as $s)
                        <h3><a>{{$s->judul}}</a></h3>
                        <p>{{$s->isi}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
