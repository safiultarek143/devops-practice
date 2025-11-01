@extends('layouts.master')

@push('run_custom_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Footer Banner</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="{{ route('security-money.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>

                        <div class="card-body">
                            <!-- <div class="form-group">
                                <label>Cost Title</label>
                                <input type="text" name="cost_title" class="form-control" placeholder="Enter Cost Title" value="{{ old('cost_title') }}" required>
                            </div> -->
                            <div class="form-group">
                                <label>Project</label>
                                <select name="project_title" class="form-control" >
                                    <option selected disabled>Select any project</option>
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->project_title }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control summernote" name="description" id="" cols="15" rows="5" placeholder="Enter description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Secuity Amount</label>
                                <input type="text" name="amount" class="form-control" placeholder="Enter Security Amount" value="{{ old('amount') }}" required>
                            </div>
                            <div class="form-group">
                                    <label for="">Payment Date</label>
                                    <input type="date" name="payment_date" class="form-control start-date" id="" placeholder="YYYY-MM-DD" required>
                            </div>
                            <div class="form-group">
                                    <label for="">Return Date</label>
                                    <input type="date" name="return_date" class="form-control start-date" id="" placeholder="YYYY-MM-DD" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Project Security Money Status</label>
                                <select name="security_money_status" id="" class="form-control">
                                    <option value="">Choose status</option>
                                        <option selected value="{{ \App\Models\Security::GOT }}">GOT</option>
                                        <option value="{{ \App\Models\Security::PENDING }}">PENDING</option>
                                </select>
                            </div>
                        
                    </div>
                </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <input type="submit" value="Add new Project Security Money" class="btn btn-success">
                        </div>
                    </div>
            </div>
            </div>
        </form>
        <br>
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

