@extends('layouts.master')
@push('run_custom_css')
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ALl Projects</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
       
        <!-- /.card-header -->
        <div class="card-body">
            <table id="data-table" class="table table-bordered table-hover dataTables_wrapper dt-bootstrap4">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Cost Type</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Note</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($project_details))
                    @foreach($project_details->cost as $key => $project)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $project->cost_type->category_name }}</td>
                            <td>{{ $project->amount }}</td>
                            <td>{{ $project->date }}</td>
                            <td>{!! $project->note !!}</td>
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

