@extends('layouts.admin')
@section('title')
License
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">License</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Picture</th>
                        <th class="text-center" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($l as $ls)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center"><img src="{{ url('license/images/'.$ls->pic) }}" style="width: 100px; height: 100px"></td>
                        <td><a class="btn btn-danger" href="{{ url('zraw-&&&-admin/license/destroy/'.$ls->id) }}"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<a href="{{ url('zraw-&&&-admin/license/create') }}" class="btn btn-primary btn-circle float-right">
    <i class="fa fa-plus"></i>
</a>
@endsection
