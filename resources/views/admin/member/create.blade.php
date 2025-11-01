@extends('layouts.master')
@push('run_custom_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Member</h1>
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
                        <form role="form" action="{{ route('members.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Member Name</label>
                                    <input type="text" name="member_name" class="form-control" id="" placeholder="Enter Member name" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="">Member Title</label>
                                    <input type="text" name="member_title" class="form-control" id="" placeholder="Enter Member Title" autofocus required>
                                </div>
                                <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control summernote" name="description" id="" cols="15" rows="5" placeholder="Enter description"></textarea>
                            </div>
                        
                            <div class="form-group">
                                    <label for="">Member Bio</label>
                                    <input type="text" name="member_bio" class="form-control" id="" placeholder="Enter Member Bio" autofocus required>
                                </div>
                                <div class="form-group">
                                <label>Member Image</label>
                                <input type="file" name="member_image" id="member-image" class="form-control" accept="image/*" required><br>
                                <img src="" id="member-img-tag" width="200px" />
                            </div>
                                
                            
                            <div class="form-group">
                                <label for="description">Member Type</label>
                                <select name="member_type" id="" class="form-control">
                                    <option value="">Choose status</option>
                                        <option selected value="{{ \App\Models\Member::EXECUTIVE }}">EXECUTIVE</option>
                                        <option value="{{ \App\Models\Member::YOUTH }}">YOUTH</option>
                                </select>
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

