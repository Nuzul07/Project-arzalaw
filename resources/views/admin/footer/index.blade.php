@extends('layouts.admin')
@section('title')
Footer
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Footer</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('zraw-&&&-admin/footer/update/{id}')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Isi 1</label>
                <textarea class="form-control stretch" name="isi1" rows="5">{!! $f->isi1 !!}</textarea>
            </div>
            <div class="form-group">
                <label>Isi 2</label>
                <textarea class="form-control stretch" name="isi2" rows="5">{!! $f->isi2 !!}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
