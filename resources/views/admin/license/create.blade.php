@extends('layouts.admin')
@section('title')
Add License
@endsection
@section('content')
<style>
    .thumb {
        margin: 10px 5px 0 0;
        width: 300px;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add License</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('zraw-&&&-admin/license/store')}}" enctype="multipart/form-data">
            @csrf
            <center>
                <div class="form-group col-md-12">
                    <br>
                    <br>
                    <div id="preview_pic"></div>
                </div>
            </center>
            <center>
                <div class="form-row" {{ $errors->has('pic') ? 'has-error' : '' }}>
                    <div class="form-group col-md-12">
                        <input class="form-control" multiple type="file" id="pic" name="pic">
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
