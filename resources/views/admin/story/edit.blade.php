@extends('layouts.master')
@push('run_custom_css')
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/select2/css/select2.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Story</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="{{ route('story.update',$story->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
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
                                <input type="text" name="story_title" class="form-control" placeholder="Enter Story Title" value="{{ $story->story_title }}" required>
                            </div>
                            <div class="form-group">
                                <label>Story Category</label>
                                <select name="story_category" class="form-control">
                                    <option selected disabled>Story Category</option>
                                    @foreach($story_categories as $story_category)
                                        <option value="{{ $story_category->id }}"selected>{{ $story_category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        
                            <div class="form-group">
                                <label for="thumbnail">Old Thumbnail</label>
                                <br>
                              
                                <img src="{{ asset($story->image) }}" alt="" height="50px" width="50px">
                                <input type="hidden" name="old_image" value="{{ $story->story_image }}">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="story_image" id="story-image" class="form-control" accept="image/*"><br>
                                <img src="" id="story-img-tag" width="200px" />
                            </div>
                            <div class="form-group">
                                <label for="description">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">Choose status</option>
                                    <option {{ $story->status==1 ? 'selected': ' ' }} value="1">Published</option>
                                    <option {{ $story->status==0 ? 'selected': ' ' }}  value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <input type="submit" value="Update Post" class="btn btn-success">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
    </section>
@endsection
@push('run_custom_jquery')
    <script src="{{ asset('admin-lte/dist/js/spartan-multi-image-picker-min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
    <script type="text/javascript">
        $("#multiple-images").spartanMultiImagePicker({
            fieldName: 'images[]',
            allowedExt:'png|jpg|jpeg|gif'
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#product-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#product-image").change(function(){
            readURL(this);
        });

        $('.tags').select2()

    </script>
@endpush


