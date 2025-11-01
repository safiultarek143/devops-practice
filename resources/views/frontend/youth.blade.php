


    @extends('layouts.frontend')
@section('content')
     <!-- upcoming celebration start -->
     <div class="my-8">
        <h1 class="text-3xl text-[#006A51] font-bold uppercase text-center">Our Youths</h1>
        @if($members->count())
        @foreach($members  as $member)
        <div class="space-y-8 p-4">
            <div class="max-w-2xl grid grid-cols-2 mx-auto bg-[#F0FBF7] rounded-md">
                <div class="relative w-full aspect-square">
                    <img alt="alter" loading="lazy" decoding="async" data-nimg="fill" sizes="100vw"
                        src="{{ asset(($member->image)) }}"
                        style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: cover;">
                </div>
                <div class="p-8">
                    <div class="text-xl uppercase tracking-wide font-bold">{{ $member->member_name }}</div>
                    <div class="text-xs text-gray-500 uppercase">{{ $member->member_title }}</div>
                    <div class="text-sm text-gray-600 font-semibold py-4">
                    {{ $member->member_bio }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
       
    </div>

    <!-- upcoming celebration end -->
    @stop