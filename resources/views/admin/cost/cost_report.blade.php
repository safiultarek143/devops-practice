@extends('layouts.master')
@push('run_custom_css')
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All project Costs</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">

        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <div class="row">
                        <div class="col-md-10">
                            <form action="#" class="form-horizontal" method="get">
                                <div class="row">
                                    <div class="col-md-2">
                                        <select class="form-control" name="project_id" id="project_id">
                                            <option value="">All Project</option>
                                            @if (count($projects) > 0)
                                                @foreach ($projects as $project)
                                                    <option value="{{$project->id}}"{{$project_id == $project->id ? 'selected' : ''}} >{{$project->project_title}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label for="from_date" class="col-lg-4 col-sm-12 col-form-label">
                                                From Date
                                            </label>
                                            <input type="date" value="{{$from_date ?? old('from_date')}}" class="form-control col-md-7" name="from_date" id="from_date">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label for="to_date" class="col-lg-3 col-sm-12 col-form-label">
                                                To Date
                                            </label>
                                            <input type="date" value="{{$to_date ?? old('to_date')}}" class="form-control col-md-7" name="to_date" id="to_date">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="submit" class="btn btn-primary btn-sm" value="Search" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
            <table id="data-table" class="table table-bordered table-hover dataTables_wrapper dt-bootstrap4">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Project</th>
                    <th>Cost Type</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($project_costs))
                    @foreach($project_costs as $key => $project_cost)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $project_cost->project->project_title }}</td>
                            <td>{{ $project_cost->cost_type->category_name }}</td>
                            <td>{{ $project_cost->amount }}</td>
                            <td>{{ $project_cost->expense_date }}</td>
                            
                        </tr>
                    @endforeach
                @endif
                </tbody>
                <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th>Total Cost Of The project</th>
                <th>{{ $total_cost }}</th>
                <th></th>
            </tr>
        </tfoot>
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


