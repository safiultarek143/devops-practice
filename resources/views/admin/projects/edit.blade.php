@extends('layouts.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Project</h1>
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
                        <form role="form" action="{{ route('projects.update',$project->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Project Name</label>
                                    <input type="text" name="project_title" class="form-control" id="" placeholder="Enter project name" value="{{$project->project_title}}" autofocus required>
                                </div>
                                <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control summernote" name="description" id="" cols="15" rows="5" placeholder="Enter description">{{$project->description}}</textarea>
                            </div>
                        
                            <div class="form-group">
                                    <label for="">Project Start Date</label>
                                    <input type="date" name="start_date" class="form-control start-date" id="" value="{{ \Carbon\Carbon::parse($project->start_date)->format('Y-m-d') }}" placeholder="YYYY-MM-DD" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Project End Date</label>
                                    <input type="date" name="end_date" class="form-control start-date" id="" value="{{ \Carbon\Carbon::parse($project->end_date)->format('Y-m-d') }}" placeholder="YYYY-MM-DD" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status</label>
                                    <input type="radio" name="status" value="1" checked>Active
                                    <input type="radio" name="status" value="0">Inactive
                                </div>
                            
                            <div class="form-group">
                                <label for="description">Project Status</label>
                                <select name="complete_status" id="" class="form-control">
                                    <option value="">Choose status</option>
                                        <option value="{{ \App\Models\Project::HOLD }}"{{\App\Models\Project::HOLD == $project->complete_status ? 'selected' : ''}} >HOLD</option>
                                        <option value="{{ \App\Models\Project::RUNNING }}"{{\App\Models\Project::RUNNING == $project->complete_status ? 'selected' : ''}}>RUNNING</option>
                                        <option value="{{ \App\Models\Project::COMPLETE }}" {{\App\Models\Project::COMPLETE == $project->complete_status ? 'selected' : ''}}> COMPLETE</option>
                                </select>
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
