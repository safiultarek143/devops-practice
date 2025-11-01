@extends('layouts.master')
@push('run_custom_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> -->
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Pay Off</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <div class="card">
                        <!-- form start -->
                        <form role="form" action="{{ route('collection.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                            <div class="form-group">
                                <label>Client</label>
                                <input type="text" name="client_name" class="form-control" placeholder="Enter Client Name" value="{{ old('client') }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control summernote" name="note" id="" cols="15" rows="5" placeholder="Enter Note"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-control" placeholder="Enter Amount" value="{{ old('amount') }}" required>
                            </div>
                            <div class="form-group">
                                    <label for="">Payoff Date</label>
                                    <input type="date" name="payoff_date" class="form-control start-date" id="" placeholder="YYYY-MM-DD" required>
                                </div>
                            
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status</label>
                                    <input type="radio" name="status" value="1" checked>Active
                                    <input type="radio" name="status" value="0">Inactive
                                </div>
                            
                            </div>
                            
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('run_custom_jquery')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>


@endpush