@extends('layouts.master')
@push('run_custom_css')
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All project Secuity Money</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('security-money.create') }}" class="btn btn-info fa-pull-right"><i class="fa fa-plus"></i> Add new</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="data-table" class="table table-bordered table-hover dataTables_wrapper dt-bootstrap4">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Project Name</th>
                    <th>Security Amount</th>
                    <th>Payment Date</th>
                    <th>Return Date</th>
                    <th>Securty Money Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($securities))
                    @foreach($securities as $key => $security)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $security->project->project_title }}</td>
                            <td>{{ $security->amount }}</td>
                            <td>{{ $security->payment_date }}</td>
                            <td>{{ $security->return_date }}</td>
                            <td>@if ($security->security_money_status == \App\Models\Security::PENDING)
                                                <span class="text-capitalize">PENDING</span>
                                            @elseif($project->security_money_status == \App\Models\Security::GOT)
                                                <span class="text-capitalize">GOT</span>
                                            @endif
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ route('security-money.edit',$security->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                @include('includes.master._confirm_delete',[
                                    'id' => $security->id,
                                    'url' => route('security-money.destroy',$security->id),
                                    'message' => 'Are you sure want to delete this Cost?',
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

