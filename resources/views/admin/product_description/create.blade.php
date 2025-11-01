@extends('layouts.master')
@push('run_custom_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product Description</h1>
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
                        <form role="form" action="{{ route('product-description.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    @if (request('product_id'))
                                        <label for="">Product</label>
                                        @php
                                            $product_name = \App\Models\Product::where('id', request('product_id'))->pluck('product_name')->first();
                                        @endphp
                                        <p>{{ $product_name }}</p>
                                        <input type="hidden" name="product_name" value="{{ request('product_id') }}">
                                    @else
                                        <label for="">Products</label>
                                        <select name="product_name" class="form-control" required>
                                            <option disabled selected>Select Product</option>
                                            @foreach($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" id="" placeholder="Enter description title" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control summernote" name="description" id="" cols="15" rows="5" placeholder="Enter description"></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                @if (request('product_id'))
                                    <a href="{{ route('products.index') }}" class="btn btn-dark float-right">Later</a>
                                @endif
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
