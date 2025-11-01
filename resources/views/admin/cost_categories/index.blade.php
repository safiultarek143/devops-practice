@extends('layouts.master')
@push('run_custom_css')
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Post Categories</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('cost-categories.create') }}" class="btn btn-info fa-pull-right"><i class="fa fa-plus"></i> Add new</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="data-table" class="table table-bordered table-hover dataTables_wrapper dt-bootstrap4">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($cost_categories))
                    @foreach($cost_categories as $key => $cost_category)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $cost_category->category_name }}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ route('cost-categories.edit',$cost_category->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                @include('includes.master._confirm_delete',[
                                    'id' => $cost_category->id,
                                    'url' => route('cost-categories.destroy',$cost_category->id),
                                    'message' => 'Are you sure want to delete this Cost Category?',
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

