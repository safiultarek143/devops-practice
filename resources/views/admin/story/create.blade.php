@extends('layouts.master')

@push('run_custom_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Story</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="{{ route('story.store') }}" method="post" enctype="multipart/form-data">
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
                                <input type="text" name="story_title" class="form-control" placeholder="Enter Post Title" value="{{ old('post_title') }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="description">Story Category</label>
                                <select name="story_category" id="" class="form-control">
                                    <option value="">Choose status</option>
                                    @foreach($story_categories as $story_category)
                                        <option value="{{ $story_category->id }}">{{ $story_category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                            <div class="form-group">
                                <label>Story Image</label>
                                <input type="file" name="story_image" id="story-image" class="form-control" accept="image/*" required><br>
                                <img src="" id="story-img-tag" width="200px" />
                            </div>
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
                            <input type="submit" value="Add new Story" class="btn btn-success">
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

