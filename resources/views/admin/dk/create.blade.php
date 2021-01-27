@extends('layouts.admin')
@section('title')
Add Daftar Kasus
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Daftar Kasus</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('zraw-&&&-admin/dk/store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="Nasabah Kami" placeholder="Nasabah Kami" readonly>
            </div>
            <div class="form-group">
                <label>Judul</label>
                <textarea class="form-control stretch" name="judul" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>Hasil</label>
                <input type="text" name="hasil" class="form-control" value="Kasus Selesai" placeholder="Kasus Selesai" readonly>
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tgl" class="form-control">
            </div>
            <center>
                <div class="form-group col-md-12">
                    <br>
                    <br>
                    <img src="{{asset('no-image.png')}}" class="responsive" id="showpic1" style="width: 200px;height: 200px;">
                </div>
            </center>
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
