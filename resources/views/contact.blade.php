@extends('layouts.user')
@section('title')
Kontak
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
                                    <h1><strong>Kontak Kami</strong></h1>
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
<div id="ftco-contact">
    <div class="container">
        <div>
            <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.178769515138!2d106.8511034!3d-6.2248205!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x612f55c2a504be4f!2sARZA%20LAW%20OFFICE!5e0!3m2!1sid!2sid!4v1611375352695!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-5">
                <div class="colorlib-contact-info">
                    <br>
                    <h3>Informasi Kontak</h3>
                    <ul>
                        @php
                        $contact = \App\Contact::all();
                        @endphp
                        @foreach ($contact as $c)
                        <li class="address" style="white-space: pre-line;">{{$c->alamat}}</li>
                        <li class="phone"><a href="tel://1234567920">{{$c->notlp}}</a></li>
                        <li class="email"><a href="mailto:info@yoursite.com">{{$c->email}}</a></li>
                        <li class="url"><a href="#">{{$c->whatsapp}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <br>
            <div class="col-md-7">
                <h3>Tuliskan Ulasan Anda Disini</h3>
                <form method="POST" action="{{url('ulasan/store')}}">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" id="fname" class="form-control" name="nama" placeholder="Nama">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" id="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea id="message" cols="30" rows="10" name="ulasan" class="form-control" placeholder="Ulasan"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
