@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-2 text-dark">Welcome {{ Auth::user()->full_name }}!</h1>
            </div>
        </div>
    </div>
@endsection
