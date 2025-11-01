@extends('layouts.master')
@push('run_custom_css')
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Benefit Tags</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('tags.create') }}" class="btn btn-info fa-pull-right"><i class="fa fa-plus"></i> Add
                new</a>
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
                @if(!empty($tags))
                    @foreach($tags as $key => $tag)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ route('tags.edit',$tag->id) }}"><i
                                            class="fa fa-edit"></i> Edit</a>
                                @include('includes.master._confirm_delete',[
                                    'id' => $tag->id,
                                    'url' => route('admin.tags.destroy',$tag->id),
                                    'message' => 'Are you sure want to delete this Benefit tag?',
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
