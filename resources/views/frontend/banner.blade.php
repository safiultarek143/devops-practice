 <!-- banner Start -->


 <!-- <div class="grid grid-cols-2 ">
        <div class="">
            <img class="h-full" src="{{ asset('assets/image/flag-bg.png') }}" alt="Flag Background">
        </div>
        <div class="my-auto">
            <img class="" src="{{ asset('assets/image/bant-logo.png') }}" alt="Bant Logo">
        </div>
    </div> -->



    <!-- banner END -->

    <!-- 3rd section
-->
<div class="swiper-container">
    <!-- Wrapper for slides -->
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
            <div class="grid grid-cols-2">
                <div class="">
                    <img class="h-full" src="{{ asset('assets/image/flag-bg.png') }}" alt="Flag Background">
                </div>
                <div class="my-auto">
                    <img class="" src="{{ asset('assets/image/bant-logo.png') }}" alt="Bant Logo">
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
            <div class="grid grid-cols-2">
                <div class="">
                    <img class="h-full" src="{{ asset('assets/image/flag-bg.png') }}" alt="Flag Background">
                </div>
                <div class="my-auto">
                    <img class="" src="{{ asset('assets/image/bant-logo.png') }}" alt="Bant Logo">
                </div>
            </div>
        </div>

        <!-- Additional slides can be added here -->
    </div>

    <!-- Pagination (optional) -->
    <!-- <div class="swiper-pagination"></div> -->
</div>
    <div class="max-w-screen-2xl  grid lg:grid-cols-2  gap-8 lg:mx-auto mx-4  my-12">
        <!-- card -->
        @if($event_stories->count())
        @foreach($event_stories  as $event)
        <div class="bg-[#F0FBF7] flex items-start p-8 gap-4 rounded-md">
            <div class="w-16 aspect-square rounded-full bg-[#006A51]"></div>
            <div class="px-4">
                <div class="font-bold tracking-wide capitalize">{{ $event->post_title }}</div>
                <div class="text-sm text-gray-600 ">{!! $event->description !!}</div>
                <!-- <button class="text-xs text-gray-800 font-bold">view more</button> -->
            </div>
        </div>
        @endforeach
        @endif
        

    </div>
    <!-- 3rd section
-->
    <!-- 4th section start -->
    <div class="max-w-screen-2xl  grid lg:grid-cols-2  gap-8 lg:mx-auto mx-4  my-12">
    @if($event_blogs->count())
    @foreach($event_blogs  as $event)
      <!-- card -->
      <div class="bg-[#F0FBF7] flex items-start p-8 gap-4 rounded-md">
          <div class="w-16 aspect-square rounded-full bg-[#006A51]"></div>
          <div class="px-4">
              <div class="font-bold tracking-wide capitalize">{{ $event->event_title }}</div>
              <div class="text-sm text-gray-600 ">{{ $event->short_description }}</div><button
                  class="text-xs text-gray-800 font-bold">view more</button>
          </div>
      </div>
      @endforeach
      @endif

  </div>
    <!-- 4th section end -->
    <!-- 5TH START -->
    <div class="max-w-screen-2xl lg:mx-auto my-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-[#006A51] py-10 lg:px-20 px-4">
            <div class="flex flex-col lg:flex-row justify-center items-center gap-10 bg-[#F0FBF7] p-6 lg:p-10">
                <div class="max-w-full lg:max-w-96 text-center lg:text-left">
                    <h1 class="text-xl font-bold">Lorem ipsum dolor sit amet.</h1>
                    <p class="text-sm text-gray-700 mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius
                        fuga distinctio aut facere aliquid architecto, doloremque accusantium nobis eaque accusamus?</p>
                </div>
                <div class="relative w-full max-w-xs lg:w-56 aspect-square mt-6 lg:mt-0">
                    <img src="https://media.licdn.com/dms/image/C5612AQFnsvLJTCnvVQ/article-cover_image-shrink_720_1280/0/1650263315590?e=2147483647&v=beta&t=YRXjMMS9hk7mZeZ85One1K7Xqc36H_TrFXtIXlBFv40"
                        alt="" class="absolute inset-0 h-full w-full object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- 5TH END
  -->

     <!-- 6th start -->
     <div class="my-10 max-w-7xl mx-4 lg:mx-auto">
        <div class="lg:flex flex-col lg:flex-row h-auto lg:h-96 gap-6">
         <!-- Content Section -->
         <div class="flex flex-col justify-center items-center p-6 lg:p-10 w-full lg:w-1/2">
            <div class="space-y-4 text-center lg:text-left">
                <h1 class="text-lg lg:text-2xl font-bold uppercase tracking-wider">Vission</h1>
                <p class="text-gray-600 text-sm">The vision of BANT is to enrich the lives of the people of Bangladesh-origin living in North Texas, by inspiring their mind and spirit to create a sense of pride in maintaining an unique Bangladeshi identity here in the US, by projecting the rich culture and heritage of Bangladesh to our young generation in particular and by fostering social and cultural awareness among the Bangladeshi community in general.
               
                The vision of BANT is to enrich the lives of the people of Bangladesh-origin living in North Texas, by inspiring their mind and spirit to create a sense of pride in maintaining an unique Bangladeshi identity here in the US, by projecting the rich culture and heritage of Bangladesh to our young generation in particular and by fostering social and cultural awareness among the Bangladeshi community in general.
                </p>
            </div>
        </div>
            <!-- Content Section -->
            <div class="flex flex-col justify-center items-center p-6 lg:p-10 w-full lg:w-1/2">
                <div class="space-y-4 text-center lg:text-left">
                    <h1 class="text-lg lg:text-2xl font-bold uppercase tracking-wider">OBJECTIVES</h1>
                    <p class="text-gray-600 text-sm">

To create and maintain a common platform for all the people from Bangladesh living in North Texas through the exchange of ideas, socialization, and unity.

To organize social, cultural, and charitable events with a view to project the rich culture and heritage of Bangladesh

To celebrate important national holidays of Bangladesh promoting the history and cultural awareness among the young Bangladeshi-Americans in particular.

To promote welfare for the Bangladeshi community living in North Texas as well as the people of Bangladesh in the event of any disaster with particular attention to the children.

To respect and cooperate with other organizations involved in serving the Bangladeshi community as well.

To improve understanding and friendship between the Bangladeshi community and the different ethnic groups living in the USA including the mainstream American people.</p>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- 6th end -->