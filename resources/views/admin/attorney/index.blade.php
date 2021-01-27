@extends('layouts.admin')
@section('title')
Attorney
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Attorney</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Jabatan</th>
                        <th class="text-center">Pengantar</th>
                        <th class="text-center">Picture</th>
                        <th class="text-center" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($att as $at)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $at->nama }}</td>
                        <td class="text-center">{{ $at->jabatan }}</td>
                        <td class="text-center">{{ $at->pengantar }}</td>
                        <td class="text-center"><img src="{{ url('attorney/images/'.$at->pic) }}" style="width: 100px; height: 100px"></td>
                        <td class="text-center"><a class="btn btn-warning" href="{{ url('zraw-&&&-admin/attorney/edit/'.$at->id) }}"><i class="fas fa-edit"></i></a></td>
                        <td><a class="btn btn-danger" href="{{ url('zraw-&&&-admin/attorney/destroy/'.$at->id) }}"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<a href="{{ url('zraw-&&&-admin/attorney/create') }}" class="btn btn-primary btn-circle float-right">
    <i class="fa fa-plus"></i>
</a>
@endsection
