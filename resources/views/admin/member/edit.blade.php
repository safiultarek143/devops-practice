@extends('layouts.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Member</h1>
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
                          
                        <form role="form" action="{{ route('members.update', $member->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Member Name</label>
                                    <input type="text" name="member_name" class="form-control" id="" value="{{$member->member_name}}"  placeholder="Enter Member name"autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="">Member Title</label>
                                    <input type="text" name="member_title" class="form-control" id="" value="{{$member->member_title}}" placeholder="Enter Member Title" autofocus required>
                                </div>
                                <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control summernote" name="description" id="" cols="15" rows="5" placeholder="Enter description">{{$member->description}}</textarea>
                            </div>
                        
                            <div class="form-group">
                                    <label for="">Member Bio</label>
                                    <input type="text" name="member_bio" class="form-control" id="" value="{{$member->member_bio}}" placeholder="Enter Member Bio" autofocus required>
                                </div>
                                <div class="form-group">
                                <label for="thumbnail">Old Thumbnail</label>
                                <input type="hidden" name="old_image" value="{{ $member->member_image }}">
                                <br>
                                <img src="{{ asset($member->image) }}" alt="" height="50px" width="50px">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="form-group">
                                <label>Member Image</label>
                                <input type="file" name="member_image" id="member-image" class="form-control" accept="image/*" ><br>
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
