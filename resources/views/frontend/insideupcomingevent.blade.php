@extends('layouts.frontend')
@section('content')



    <!-- upcoming event -->
     

    <!-- Event Details Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#006A51] my-8 text-center">
        {{$event->event_title}}
        </h1>

        <div class="flex flex-col lg:flex-row gap-8 my-8">
            <div class="lg:w-1/2">
                <img src="{{asset($event->image)}}"
                    alt="" class="w-full h-auto rounded-lg shadow-lg" />
                <a href="{{ route('gallery',$event->id) }}">
                    <button
                        class="w-full mt-4 bg-white text-[#006A51] border border-[#006A51] font-bold py-2 px-4 rounded">See
                        Gallery</button>
                </a>
            </div>

            <div class="lg:w-1/2">
                <h2 class="text-3xl uppercase font-bold my-8">{{$event->event_title}}</h2>
                <p class="my-4">{{$event->event_title}}</p>
                <p class="my-2">at {{ $event->start_date }}</p>
                <p class="my-4">Address: {{ $event->location }}</p>
                
                <p class="text-xl uppercase font-semibold my-8" id="timer"></p>
                <button class="border-[#006A51] text-[#006A51] border-2 px-4 py-2 rounded-md text-sm buy-ticket-btn">Buy
                    Ticket</button>
            </div>
        </div>

        <div class="my-8">
            <h3 class="text-xl font-bold my-4">ABOUT EVENT</h3>
            <p>
            {!! $event->description !!}
            </p>
        </div>

        <div>
            <h3 class="text-xl font-bold my-2">CONTACT:</h3>
            <p>111{{ $event->number }}</p>
        </div>
    </div>


    <!-- footer end -->
    <!-- Modal -->
    <div id="ticketModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg p-8 max-w-md w-full relative">
            <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <h2 class="text-2xl font-bold mb-4">Buy Ticket</h2>
            <img src="https://live.staticflickr.com/7855/46263135704_faff567c1c_b.jpg" alt="Event image"
                class="w-full h-32 object-cover mb-4 rounded">
            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet.</p>
            <div class="space-y-2">
                <button
                    class="w-full border border-green-500 text-green-500 py-2 rounded hover:bg-green-50">12.59$</button>
                <button
                    class="w-full border border-green-500 text-green-500 py-2 rounded hover:bg-green-50">12.59$</button>
                <button
                    class="w-full border border-green-500 text-green-500 py-2 rounded hover:bg-green-50">12.59$</button>
            </div>
        </div>
    </div>

    <!-- Script -->
    <!-- <script>
        // Toggle mobile menu
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        let isMenuOpen = false;

        menuBtn.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            mobileMenu.style.display = isMenuOpen ? 'flex' : 'none';
        });

        // Modal logic
        const openModalButtons = document.querySelectorAll('.buy-ticket-btn');
        const ticketModal = document.getElementById('ticketModal');
        const closeModalButton = document.getElementById('closeModal');

        openModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                ticketModal.style.display = 'flex';
            });
        });

        closeModalButton.addEventListener('click', () => {
            ticketModal.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if (event.target === ticketModal) {
                ticketModal.style.display = 'none';
            }
        });
    </script> -->
    <script>
        // Get the start date from the server-side variable
        const startDate = new Date("{{ $event->start_date }}").getTime();

        function updateTimer() {
            const now = new Date().getTime();
            const timeLeft = startDate - now;

            if (timeLeft <= 0) {
                document.getElementById("timer").innerHTML = "Time's up!";
                clearInterval(timerInterval);
            } else {
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                document.getElementById("timer").innerHTML =
                    hours + ":" + String(minutes).padStart(2, '0') + ":" + String(seconds).padStart(2, '0');
            }
        }

        // Update the timer every second
        const timerInterval = setInterval(updateTimer, 1000);
    </script>
    <script>
        // Get the start date from the server-side variable
        const startDate = new Date("{{ $event->start_date }}").getTime();

        function updateTimer() {
            const now = new Date().getTime();
            const timeLeft = startDate - now;

            if (timeLeft <= 0) {
                document.getElementById("timer").innerHTML = "Time's up!";
                clearInterval(timerInterval);
            } else {
                const hours = Math.floor(timeLeft / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                
                // Display the time in "X hours Y minutes" format
                document.getElementById("timer").innerHTML =
                    hours + " hours " + minutes + " minutes";
            }
        }

        // Update the timer every second
        const timerInterval = setInterval(updateTimer, 1000);
    </script>
         @stop
