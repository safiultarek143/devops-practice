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
        <div class="card-header">
            <a href="{{ route('projects.create') }}" class="btn btn-info fa-pull-right"><i class="fa fa-plus"></i> Add new</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="data-table" class="table table-bordered table-hover dataTables_wrapper dt-bootstrap4">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Project Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Current status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($projects))
                    @foreach($projects as $key => $project)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $project->project_title }}</td>
                            <td>{{ $project->start_date }}</td>
                            <td>{{ $project->end_date }}</td>
                            <td>@if ($project->complete_status == \App\Models\Project::COMPLETE)
                                                <span class="text-capitalize">COMPLETE</span>
                                            @elseif($project->complete_status == \App\Models\Project::HOLD)
                                                <span class="text-capitalize">HOLD</span>
                                            @elseif($project->complete_status == \App\Models\Project::RUNNING)
                                                <span class="text-capitalize">RUNNING</span>
                                            @endif</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ route('projects.edit',$project->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                @include('includes.master._confirm_delete',[
                                    'id' => $project->id,
                                    'url' => route('projects.destroy',$project->id),
                                    'message' => 'Are you sure want to delete this Project?',
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

