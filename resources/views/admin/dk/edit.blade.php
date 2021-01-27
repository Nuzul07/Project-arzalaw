@extends('layouts.admin')
@section('title')
Edit Daftar Kasus
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Daftar Kasus</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('zraw-&&&-admin/dk/update')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$dk->id}}">
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control stretch" name="nama" value="{{$dk->nama}}" readonly>
            </div>
            <div class="form-group">
                <label>Judul</label>
                <textarea class="form-control stretch" name="judul" rows="5">{!! $dk->judul !!}</textarea>
            </div>
            <div class="form-group">
                <label>Hasil</label>
                <input class="form-control stretch" name="hasil" value="{{$dk->hasil}}" readonly>
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" class="form-control stretch" name="tgl" value="{{$dk->tgl}}">
            </div>
            @if (empty($dk->pic))
            <center>
                <div class="form-group col-md-12">
                    <br>
                    <br>
                    <img src="{{asset('no-image.png')}}" class="responsive" id="showpic1" style="width: 200px;height: 200px;">
                </div>
            </center>
            @endif
            @if (!empty($dk->pic))
            <center>
                <div class="form-group col-md-12">
                    <br>
                    <br>
                    <img src="{{asset('dk/images/'.$dk->pic)}}" class="responsive" id="showpic1" style="width: 200px;height: 200px;">
                </div>
            </center>
            @endif
            <center>
                <div class="form-row" {{ $errors->has('pic') ? 'has-error' : '' }}>
                    <div class="form-group col-md-12">
                        <input type="file" name="pic" onchange="readURL1(this);">
                        <br>
                        <br>
                        <span>Note: Picture must be type: jpg,jpeg,png, and max size is 2MB.</span>
                        <br>
                        <span class="text-danger"> {{ $errors->first('pic') }} </span>
                    </div>
            </center>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
