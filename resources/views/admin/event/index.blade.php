@extends('layouts.master')
@push('run_custom_css')
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Events</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('events.create') }}" class="btn btn-info fa-pull-right"><i class="fa fa-plus"></i> Add new</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="data-table" class="table table-bordered table-hover dataTables_wrapper dt-bootstrap4">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Event Name</th>
                    <th>Category</th>
                    <th>Location</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($events))
                    @foreach($events as $key => $event)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $event->event_title }}</td>
                            <td>{{ $event->event_category->category_name?? '' }}</td>
                            <td>{{ $event->location }}</td>
                            <td>{{ $event->number }}</td>
                            <td>
                                <img src="{{ asset($event->image) }}" alt="No image" width="40px">
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ route('events.edit',$event->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                @include('includes.master._confirm_delete',[
                                    'id' => $event->id,
                                    'url' => route('events.destroy',$event->id),
                                    'message' => 'Are you sure want to delete this Event?',
                                ])
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
@push('run_custom_jquery')
    <script src="{{asset('admin-lte/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(function () {
            $("#data-table").DataTable({
                aaSorting: []
            });
        });
    </script>
@endpush
