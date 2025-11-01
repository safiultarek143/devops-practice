@extends('layouts.frontend')
@section('content')    
    <!-- celebration stories start -->
    <div class="flex flex-wrap gap-4 max-w-4xl mx-auto justify-center items-center my-8">
    
    <a href="{{ route('celebrate.stories')}}"><button
    class="px-4 py-2 uppercase font-bold rounded-md border-2 text-xs bg-[#006A51] text-white border-[#006A51]">all</button>
</a>
    @if(!empty($event_categories))
                    @foreach($event_categories as $key => $event_category)
                       
                            <a href="{{ route('cat.celebrate',$event_category->id) }}">
                            <button
            class="px-4 py-2 uppercase font-bold rounded-md border-2 text-xs bg-[#006A51] text-white border-[#006A51]">{{ $event_category->category_name }}</button>
</a>        
            @endforeach
                @endif    

    </div>

    <!-- card -->
    <div
        class="grid grid-cols-1 max-w-screen-xl mx-4 lg:mx-auto mx-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @if($events->count())
        @foreach($events  as $event)
        <div class="shadow-lg overflow-hidden w-full my-8">
            <div class="relative w-full aspect-square">
                <img alt="example" loading="lazy" decoding="async"
                    src="{{ asset(($event->image)) }}"
                    class="absolute h-full w-full inset-0 object-cover" />
                <div
                    class="absolute bottom-4 right-2 py-2 px-4 text-xs font-bold bg-black/50 text-white tracking-wider uppercase rounded-lg">
                    cultural
                </div>
            </div>
            <div class="p-4 space-y-2 bg-[#F0FBF7] text-center">
                <div class="font-black uppercase">{{ $event->event_title }}</div>
                <div class="text-gray-700 text-sm">{{ $event->short_description }}</div>
            </div>
        </div>
        @endforeach
        @endif
        <!-- Repeat similar blocks for other cards -->
    </div>

    <!-- card -->


    <!-- celebration stories end -->
     @stop