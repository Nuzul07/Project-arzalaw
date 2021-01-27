@extends('layouts.user')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <img src="{{ asset('lawmaker/images/Arza law.v1.png')}}" alt="Image" class="img-responsive">
        </div>
        <br>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h2 class="text-center">Selamat Datang di ARZA LAW OFFICE</h2>
            <p class="text-center">ARZA LAW OFFICE merupakan Advokat berpengalaman, dan profesional dengan izin. Kami berkantor di Cervino Village Lantai 3 No.3P, Jl. KH. Abdullah Syafei No.27, Tebet Barat Tebet Jakarta Selatan 12810.</p>
            <!-- <p><a href="#" class="btn btn-primary">Read More</a></p> -->
        </div>
    </div>
</div>

<div class="ftco-practice">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center ftco-heading">
                <h2>Alasan Anda Memilih Kami</h2>
                <p>Berbagai alasan yang kuat kenapa anda harus memilih kami</p>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </span>
                    <div class="desc">
                        <h3><a>Biaya Yang Fleksibel</a></h3>
                        <p>Untuk tarif atau biaya, kami tidak mematok harga jasa advokat kami. Hal itu bisa dinegosiasikan dan tentunya kami akan memberikan harga jasa pengacara murah dengan hasil yang maksimal dan memuaskan untuk anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="far fa-handshake"></i>
                    </span>
                    <div class="desc">
                        <h3><a>Partner Hukum Profesional</a></h3>
                        <p> Kantor Hukum ARZA didukung oleh partner lawyer dan konsultan hukum yang mampu bekerja secara profesional sebagai penyedia jasa pelayanan hukum kepada pihak - pihak yang memerlukan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="fas fa-hand-sparkles"></i>
                    </span>
                    <div class="desc">
                        <h3><a>Penanganan Terbaik</a></h3>
                        <p>Karena kantor kami salah satu jasa pengacara penutupan Kartu Kredit yang dapat memberikan penanganan terbaik untuk membantu menyelesaikan permasalahan Kartu Kredit/KTA & berbagai masalah hukum lainnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="ftco-counter" class="ftco-counters" style="background-image: url('{{asset('lawmaker/images/img_bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="fas fa-landmark"></i></span>
                <span class="ftco-counter js-counter" data-from="0" data-to="1" data-speed="1000" data-refresh-interval="50"></span>
                <span class="ftco-counter-label">Our Office</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="fas fa-users"></i></span>
                <span class="ftco-counter js-counter" data-from="0" data-to="7" data-speed="2500" data-refresh-interval="50"></span>
                <span class="ftco-counter-label">Our Team</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="fas fa-list-ul"></i></span>
                <span class="ftco-counter js-counter" data-from="0" data-to="{{$s->count()}}" data-speed="2500" data-refresh-interval="50"></span>
                <span class="ftco-counter-label">Services</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="fas fa-award"></i></span>
                <span class="ftco-counter js-counter" data-from="0" data-to="{{$l->count()}}" data-speed="2000" data-refresh-interval="50"></span>
                <span class="ftco-counter-label">License</span>
            </div>
        </div>
    </div>
</div>

<div class="ftco-practice">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center ftco-heading">
                <h2>Pelayanan Kami</h2>
                <p>Berikut adalah berbagai permasalahan hukum yang dapat kami tangani</p>
            </div>
        </div>
        @php
        $services = \App\Service::where('id', 1)->get();
        @endphp
        @foreach ($services as $s)
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="far fa-credit-card"></i>
                    </span>
                    <div class="desc">
                        <h3><a>{{$s->judul}}</a></h3>
                        <p>{{$s->isi}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @php
            $services = \App\Service::where('id', 2)->get();
            @endphp
            @foreach ($services as $s)
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </span>
                    <div class="desc">
                        <h3><a>{{$s->judul}}</a></h3>
                        <p>{{$s->isi}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @php
            $services = \App\Service::where('id', 3)->get();
            @endphp
            @foreach ($services as $s)
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="fas fa-scroll"></i>
                    </span>
                    <div class="desc">
                        <h3><a>{{$s->judul}}</a></h3>
                        <p>{{$s->isi}}</p><br>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12 text-center animate-box">
                <p><a class="btn btn-primary btn-lg btn-learn" href="{{ url('pelayanan') }}">Lihat Lebih &nbsp;<i class="fas fa-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center ftco-heading">
            <h2>License</h2>
        </div>
    </div>
    <div class="row">
        @php
        $l = \App\License::all();
        @endphp
        @foreach ($l as $ls)
        <div class="col-md-6 col-lg-4">
            <div class="blog-featured animate-box">
                <a href="{{ url('license/images/'.$ls->pic) }}"><img class="img-responsive img-rounded" src="{{ url('license/images/'.$ls->pic) }}" style="border: 5px solid #3F52E3;"></a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br><br><br><br>
@endsection
