@extends('layouts.master')
@push('run_custom_css')
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/select2/css/select2.min.css') }}">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit product</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="product_name" class="form-control"
                                       placeholder="Enter product name" value="{{$product->product_name}}" required>
                            </div>
                            <div class="form-group">
                                <label>Product Category</label>
                                <select name="category_name" class="form-control">
                                    <option>Select any category</option>
                                    @foreach($product_categories as $product_category)
                                        <option value="{{ $product_category->id }}"
                                                selected>{{ $product_category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea name="short_description" class="form-control" rows="4"
                                          placeholder="Enter short description"
                                          required>{{ $product->short_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="number" name="quantity" class="form-control"
                                       placeholder="Enter product quantity" value="{{ $product->quantity }}" required>
                            </div>
                            <div class="form-group">
                                <label>Package Quantity</label>
                                <input type="number" name="package_quantity"
                                       placeholder="Enter product package quantity"
                                       value="{{ $product->package_quantity}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Benefit Tags</label>
                                <div class="select2-purple">
                                    <select class="form-control tags" name="tags[]" multiple="multiple"
                                            data-placeholder="Select tags" data-dropdown-css-class="select2-purple">
                                        @foreach($tags as $tag)
                                            <option {{ $product->tags->contains($tag)?'selected' : ''}} value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" placeholder="Enter product price" class="form-control" value="{{ $product->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Old Thumbnail</label>
                                <input type="hidden" name="old_image" value="{{ $product->product_image }}">
                                <br>
                                <img src="{{ asset($product->image) }}" alt="" height="50px" width="50px">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" name="product_image" id="product-image" class="form-control"
                                       accept="image/*"><br>
                                <img src="" id="product-img-tag" width="200px"/>
                            </div>
                            @if (count($product->more_view))
                                <br>
                                <div class="form-group">
                                    <label for="More views">More View Images</label>
                                    <br>
                                    @foreach($product->more_view as $image)
                                        <input type="hidden" name="image">
                                        <img src="{{asset($image->more_image)}}" alt="" height="50px" width="50px">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <a href="{{route('image.remove', $image->id)}}">
                                            <button class="btn btn-md cart-close" type="button"><i
                                                    class="fa fa-times"></i></button>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-group">
                                <label>More View Images (multiple image supported)</label>
                                <div class="row" id="multiple-images"></div>
                            </div>
                            <div class="form-group">
                                <label>Special</label>&nbsp;&nbsp;
                                <input type="radio" name="special" {{ $product->special == 1? 'checked' : '' }} value="1">&nbsp;&nbsp;Yes&nbsp;&nbsp;
                                <input type="radio" name="special" {{ $product->special == 0? 'checked' : '' }} value="0">&nbsp;&nbsp;No
                            </div>
                            <div class="form-group">
                                <label>In Stock</label>&nbsp;&nbsp;
                                <input type="radio" name="in_stock" {{ $product->in_stock == \App\Models\Product::IN_STOCK? 'checked' : '' }} value="{{ \App\Models\Product::IN_STOCK }}">&nbsp;&nbsp;Yes&nbsp;&nbsp;
                                <input type="radio" name="in_stock" {{ $product->in_stock == \App\Models\Product::STOCK_OUT? 'checked' : '' }} value="{{ \App\Models\Product::STOCK_OUT }}">&nbsp;&nbsp;No
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <input type="submit" value="Update Product" class="btn btn-success">
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
            allowedExt: 'png|jpg|jpeg|gif'
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

        $("#product-image").change(function () {
            readURL(this);
        });

        $('.tags').select2()

    </script>
@endpush

