@extends('layouts.master')

@push('run_custom_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Post</h1>
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
                                <label>Post Title</label>
                                <input type="text" name="post_title" class="form-control" placeholder="Enter Post Title" value="{{ old('post_title') }}" required>
                            </div>
                            <!-- <div class="form-group">
                                <label>Post Category</label>
                                <select name="category_name" class="form-control">
                                    <option selected disabled>Select any category</option>
                                    @foreach($post_categories as $post_category)
                                        <option value="{{ $post_category->id }}">{{ $post_category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control summernote" name="description" id="" cols="15" rows="5" placeholder="Enter description"></textarea>
                            </div>
                            <!-- <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="2" placeholder="Enter meta description" value="{{ old('meta_description') }}" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <textarea name="meta_keyword" class="form-control" rows="1" placeholder="Enter keywords" value="{{ old('keyword') }}" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Post Image</label>
                                <input type="file" name="post_image" id="post-image" class="form-control" accept="image/*" required><br>
                                <img src="" id="post-img-tag" width="200px" />
                            </div> -->
                            <div class="form-group">
                                <label for="description">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">Choose status</option>
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

