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
                    <h1>Edit Footer Banner</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
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
                                <label>Post Title</label>
                                <input type="text" name="post_title" class="form-control" placeholder="Enter Post Title" value="{{ $post->post_title }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="8" placeholder="Enter description"  required>{{ $post->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="2" placeholder="Enter meta description" required>{{ $post->meta_description}}</textarea>
                            </div>
                        
                            <div class="form-group">
                                <label for="thumbnail">Old Thumbnail</label>
                                <br>
                                <input type="hidden" name="old_image" >
                                <img src="{{ asset($post->image) }}" alt="" height="50px" width="50px">
                            </div>
                            <div class="form-group">
                                <label>Footer Banner Image</label>
                                <input type="file" name="post_image" id="post-image" class="form-control" accept="image/*"><br>
                                <img src="" id="post-img-tag" width="200px" />
                            </div>
                            <div class="form-group">
                                <label for="description">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">Choose status</option>
                                    <option {{ $post->status==1 ? 'selected': ' ' }} value="1">Published</option>
                                    <option {{ $post->status==0 ? 'selected': ' ' }}  value="0">Unpublished</option>
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


