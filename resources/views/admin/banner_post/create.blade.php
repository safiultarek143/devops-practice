@extends('layouts.master')

@push('run_custom_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Story1</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
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
                            <div class="form-group">
                                <label>Story Title</label>
                                <input type="text" name="post_title" class="form-control" placeholder="Enter Post Title" value="{{ old('post_title') }}" required>
                            </div>
                            >
                           
                            <div class="form-group">
                                <label>Banner Image test</label>
                                <input type="file" name="post_image" id="post-image" class="form-control" accept="image/*" required><br>
                                <img src="" id="post-img-tag" width="200px" />
                            </div>
                            <div class="form-group">
                                <label for="description">Status1</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">Choose status1</option>
                                            <option selected value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                </select>
                            </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <input type="submit" value="Add new Post" class="btn btn-success">
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

