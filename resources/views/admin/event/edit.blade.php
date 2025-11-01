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
                    <h1>Edit Event</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form action="{{ route('events.update', $event->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
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
                                <label>Event title</label>
                                <input type="text" name="event_title" class="form-control" placeholder="Enter Event title" value="{{ old('event_title', $event->event_title) }}" required>
                                @error('event_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Event Category</label>
                                <select name="event_category" class="form-control">
                                    <option value="">Choose category</option>
                                    @foreach($event_categories as $event_category)
                                        <option value="{{ $event_category->id }}" {{ $event->event_category_id == $event_category->id ? 'selected' : '' }}>{{ $event_category->category_name }}</option>
                                    @endforeach
                                </select>
                                @error('event_category')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea name="short_description" class="form-control" rows="4" placeholder="Enter short description" required>{{ old('short_description', $event->short_description) }}</textarea>
                                @error('short_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control summernote" rows="4" placeholder="Enter description" required>{{ old('description', $event->description) }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
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
                                <label>Location/Venue</label>
                                <input type="text" name="location" class="form-control" placeholder="Enter Location" value="{{ old('location', $event->location) }}" required>
                                @error('location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Number</label>
                                <input type="number" name="number" placeholder="Enter Phone Number" value="{{ old('number', $event->number) }}" class="form-control" required>
                                @error('number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" placeholder="Enter event price" class="form-control" value="{{ old('number', $event->price) }}" required>
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Event Image</label>
                                <input type="file" name="event_image" id="event-image" class="form-control" accept="image/*" required><br>
                                <img src="" id="event-img-tag" width="200px" />
                            </div>
                            
                            <div class="form-group">
                                <label for="thumbnail">Old Thumbnail</label>
                                <input type="hidden" name="old_image" value="{{ $event->event_image }}">
                                <br>
                                <img src="{{ asset($event->image) }}" alt="" height="50px" width="50px">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @if (count($event->more_view))
                                <br>
                                <div class="form-group">
                                    <label for="More views">More View Images</label>
                                    <br>
                                    @foreach($event->more_view as $image)
                                        <input type="hidden" name="image">
                                        <img src="{{asset('/uploads/events/more_views/' . $image->image)}}" alt="" height="50px" width="50px">
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
                                <label for="">Event Start Date</label>
                                <input type="date" name="start_date" class="form-control" value="{{ old('start_date', $event->start_date) }}" required>
                                @error('start_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Event End Date</label>
                                <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $event->end_date) }}" required>
                                @error('end_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="radio" name="status" value="1" {{ $event->status ? 'checked' : '' }}> Active
                                <input type="radio" name="status" value="0" {{ !$event->status ? 'checked' : '' }}> Inactive
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <input type="submit" value="Update Event" class="btn btn-success">
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
                    $('#event-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#event-image").change(function(){
            readURL(this);
        });

        $('.tags').select2();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endpush
