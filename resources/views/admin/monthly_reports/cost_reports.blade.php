@extends('layouts.master')
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h4 class="page-title">Cost monthly Report</h4>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
            
                <div class="card-body">
                    <div class="form-group">
                        <form action="">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="month">Month</label>
                                    <select name="month" id="month" class="form-control" required>
                                        <option value=''>Select Month</option>
                                        <option {{$month == 1 ? 'selected' : ''}} value='1'>January</option>
                                        <option {{$month == 2 ? 'selected' : ''}} value='2'>February</option>
                                        <option {{$month == 3 ? 'selected' : ''}} value='3'>March</option>
                                        <option {{$month == 4 ? 'selected' : ''}} value='4'>April</option>
                                        <option {{$month == 5 ? 'selected' : ''}} value='5'>May</option>
                                        <option {{$month == 6 ? 'selected' : ''}} value='6'>June</option>
                                        <option {{$month == 7 ? 'selected' : ''}} value='7'>July</option>
                                        <option {{$month == 8 ? 'selected' : ''}} value='8'>August</option>
                                        <option {{$month == 9 ? 'selected' : ''}} value='9'>September</option>
                                        <option {{$month == 10 ? 'selected' : ''}} value='10'>October</option>
                                        <option {{$month == 11 ? 'selected' : ''}} value='11'>November</option>
                                        <option {{$month == 12 ? 'selected' : ''}} value='12'>December</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="year">Year</label>
                                    <select name="year" id="year" class="form-control" required>
                                        <option value=''>Select Year</option>
                                        <option {{$yearSelected == 2023 ? 'selected' : ''}} value='2023'>2023</option>
                                        <option {{$yearSelected == 2024 ? 'selected' : ''}} value='2024'>2024</option>
                                        <option {{$yearSelected == 2025 ? 'selected' : ''}} value='2025'>2025</option>
                                        <option {{$yearSelected == 2026 ? 'selected' : ''}} value='2026'>2026</option>
                                        <option {{$yearSelected == 2027 ? 'selected' : ''}} value='2027'>2027</option>
                                        <option {{$yearSelected == 2028 ? 'selected' : ''}} value='2028'>2028</option>
                                        <option {{$yearSelected == 2029 ? 'selected' : ''}} value='2029'>2029</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <br>
                                    <input type="submit" class="btn btn-primary mt-2" value="Submit">
                                </div>
                                <div class="col-md-1">
                                    <br>
                                    <!-- <a href="/generate-pdf/{$request->month}/{$request->year}" class="btn btn-info fa-pull-right"><i class="fa fa-plus"></i> Download</a> -->

                                    <a href="{{ route('pdf-generate', ['month' => $month, 'yearSelected' => $yearSelected]) }}">Show</a>
                                </div>
                            
                            </div>
                        </form>
                    </div>
                    
                    <div class="dt-responsive table-responsive">
                        <table id="example" class="display" class="table table-striped table-bordered">
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
                            @if(!empty($costs))
                    @foreach($costs as $key => $cost)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $cost->project->project_title }}</td>
                            <td>{{ $cost->cost_type->category_name }}</td>
                            <td>{{ $cost->amount }}</td>
                            <td>{{ $cost->expense_date }}</td>
                        </tr>
                    @endforeach
                @endif
                            </tbody>
                            <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th>Total Cost Of The Month</th>
                <th>{{ $total_cost }}</th>
                <th></th>
            </tr>
        </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

    </div>
    <script>
        new DataTable('#myTable', {
    layout: {
        topStart: {
            buttons: [
                {
                    extend: 'pdfHtml5',
                    text: 'Save current page',
                    exportOptions: {
                        modifier: {
                            page: 'current'
                        }
                    }
                }
            ]
        }
    }
});


@endsection
@push('run_custom_jquery')
    <script src="{{asset('admin-lte/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
    new DataTable('#example', {
    layout: {
        topStart: {
            buttons: [
                {
                    extend: 'pdfHtml5',
                    download: 'open'
                }
            ]
        }
    }
});
    </script>
@endpush
