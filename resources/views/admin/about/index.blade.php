@extends('layouts.admin')
@section('title')
About
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">About</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('zraw-&&&-admin/about/update/{id}')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <textarea class="form-control stretch" name="nama" rows="5">{!! $abt->nama !!}</textarea>
            </div>
            <div class="form-group">
                <label>Isi 1</label>
                <textarea class="form-control stretch" name="isi1" rows="5">{!! $abt->isi1 !!}</textarea>
            </div>
            <div class="form-group">
                <label>Isi 2</label>
                <textarea class="form-control stretch" name="isi2" rows="5">{!! $abt->isi2 !!}</textarea>
            </div>
            @if (empty($abt->pic))
            <center>
                <div class="form-group col-md-12">
                    <br>
                    <br>
                    <img src="{{asset('no-image.png')}}" class="responsive" id="showpic" style="width: 200px;height: 200px;">
                </div>
            </center>
            @endif
            @if (!empty($abt->pic))
            <center>
                <div class="form-group col-md-12">
                    <br>
                    <br>
                    <img src="{{asset('about/images/'.$abt->pic)}}" class="responsive" id="showpic1" style="width: 200px;height: 200px;">
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
