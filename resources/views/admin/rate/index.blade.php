@extends('layouts.admin')
@section('title')
Rate
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rate</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Ulasan</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($r as $rate)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $rate->nama }}</td>
                        <td class="text-center">{{ $rate->email }}</td>
                        <td class="text-center">{{ $rate->ulasan }}</td>
                        <td class="text-center"><button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $rate->id }}" data-action="{{ route('rate.destroy',$rate->id) }}" onclick="deleteConfirmation({{$rate->id}})"> Delete</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        function deleteConfirmation(id) {
            Swal.fire({
                title: "Delete?",
                text: "Please ensure and then confirm!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#E02D1B',
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then(function(e) {
                if (e.value === true) {
                    var el = this
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: 'POST',
                        url: "rate/destroy/" + id,
                        data: {
                            _token: CSRF_TOKEN
                        },
                        success: function(results) {
                            $(el).ajax.rea
                            Swal.fire("Done!", results.message, "success");
                        },
                    });
                } else {
                    e.dismiss;
                }
            }, function(dismiss) {

                return false;
            })
        }
    </script>


    @endsection
