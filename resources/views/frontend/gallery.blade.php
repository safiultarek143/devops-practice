@extends('layouts.frontend')
@section('content') 
    <!-- gallery -->

    <div class=" max-w-screen-xl lg:mx-auto mx-4">

        <div class="  items-center justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-8">
@if($events->count())
        @foreach($events->more_view as $image)
                <img src="{{asset('/uploads/events/more_views/' . $image->image)}}"
                    alt="Tropical resort" class="w-full h-48 object-cover rounded-lg">
               
                    @endforeach
                    @endif

            </div>


        </div>
    </div>
    @stop