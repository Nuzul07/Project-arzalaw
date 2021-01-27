@extends('layouts.admin')
@section('title')
Service
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Service</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Isi</th>
                        <th class="text-center" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($s as $svc)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $svc->judul }}</td>
                        <td class="text-center">{{ $svc->isi }}</td>
                        <td class="text-center"><a class="btn btn-warning" href="{{ url('zraw-&&&-admin/service/edit/'.$svc->id) }}"><i class="fas fa-edit"></i></a></td>
                        <td><a class="btn btn-danger" href="{{ url('zraw-&&&-admin/service/destroy/'.$svc->id) }}"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<a href="{{ url('zraw-&&&-admin/service/create') }}" class="btn btn-primary btn-circle float-right">
    <i class="fa fa-plus"></i>
</a>
@endsection
