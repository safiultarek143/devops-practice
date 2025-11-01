@extends('layouts.master')
@push('run_custom_css')
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/select2/css/select2.min.css') }}">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Show Post</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="#" method="post" enctype="multipart/form-data">
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
                                <p>{{ $post->post_title }}</p>
                            </div>
                            <div class="form-group">
                                <label>Post Category</label>
                                <p>{{ $post->post_category->category_name }}</p>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <p>{!! $post->description !!}</p>
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <p>{!! $post->meta_description !!}</p>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label>Keywords</label>
                               <p>{{ $post->meta_keyword }}</p>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Post Thumbnail</label>
                                <br>
                                <input type="hidden" name="old_image" >
                                <img src="{{ asset($post->image) }}" alt="" height="50px" width="50px">
                            </div>
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



