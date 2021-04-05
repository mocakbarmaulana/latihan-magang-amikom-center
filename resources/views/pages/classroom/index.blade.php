@extends('layouts.global')

@section('pages')
<h1>Classroom</h1>

<!-- Page Heading -->
<div class="d-flex justify-content-end">
    <a href="{{route('classroom.create')}}" class="btn btn-primary mb-2">+ Add Classroom</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Room</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $classroom)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$classroom->name}}</td>
                        <td>{{$classroom->room}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
