@extends('layouts.admin')
@section('title')
Edit Service
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Service</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('zraw-&&&-admin/service/update')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$s->id}}">
            <div class="form-group">
                <label>Judul</label>
                <textarea class="form-control stretch" name="judul" rows="5">{!! $s->judul !!}</textarea>
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <textarea class="form-control stretch" name="isi" rows="5">{!! $s->isi !!}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
