@extends('layouts.frontend')
@section('content')
    <!-- headingg -->
    <div class="lg:flex justify-center my-12  items-center gap-8">
        <h1 class="text-3xl font-bold uppercase text-[#006A51] text-center">Upcoming Events</h1>
        <div class="relative w-full max-w-xs">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text"
                class="px-8 py-2.5  border border-gray-300 rounded-lg bg-[#006A51] text-white text-center text-xs font-bold tracking-wide"
                placeholder="September 1, 2024" value="September 1, 2024" readonly>
        </div>
    </div>

    <!-- headingg -->

    <!-- youth -->
    <div class="max-w-screen-xl mx-4 lg:mx-auto shadow-lg border my-12">
    @if($events->count())
    @foreach($events  as $event)
        <!-- <div class="w-full border-b-2 grid grid-cols-1 md:grid-cols-3 p-8 gap-4">
            <div class="relative w-full aspect-square">
                <img alt="Event image" class="absolute inset-0 w-full h-full object-cover"
                    src="{{ asset(($event->image)) }}">
            </div>
            <div class="col-span-1 md:col-span-2 flex flex-col justify-between">
                <h2 class="text-2xl font-bold uppercase text-[#006A51]">{{ $event->event_title }}</h2>
                <div class="flex flex-col md:flex-row justify-between items-start text-gray-600 tracking-wider">
                    <div class="">
                        <div>{{ $event->start_date }}</div>
                        <div>6pm to 10pm</div>
                    </div>
                    <p class="md:w-1/2">{{ $event->short_description }}</p>
                </div>
                <div class="text-xl font-semibold uppercase tracking-wider text-[#006A51]" id="timer" ></div>

                <div class="flex gap-4 mt-4">
                    <a href="{{ route('upcomingevent.details',$event->slug) }}" class="inline-block">
                        <button class="border-[#006A51] text-[#006A51] border-2 px-4 py-2 rounded-md text-sm">Read
                            More</button>
                    </a>
                    <button class="border-[#006A51] text-[#006A51] border-2 px-4 py-2 rounded-md text-sm">Buy
                        Ticket</button>
                </div>
            </div>
        </div> -->
            <!-- Event Section -->

        <div class="w-full border-b-2 grid grid-cols-1 md:grid-cols-3 p-8 gap-4">
            <div class="relative w-full aspect-square">
                <img alt="Event image" class="absolute inset-0 w-full h-full object-cover"
                    src="{{ asset(($event->image)) }}">
            </div>
            <div class="col-span-1 md:col-span-2 flex flex-col justify-between">
                <h2 class="text-2xl font-bold uppercase text-[#006A51]">{{ $event->event_title }}</h2>
                <div class="flex justify-between items-start text-gray-600 tracking-wider">
                    <div>
                        <div>{{ $event->start_date }}</div>
                        <div>6pm to 10pm</div>
                    </div>
                    <p>{{ $event->short_description }}</p>
                </div>
                <div class="text-xl font-semibold uppercase tracking-wider text-[#006A51]" id="timer" ></div>
                <div class="flex gap-4 mt-4">
                    <a href="{{ route('upcomingevent.details',$event->slug) }}" class="inline-block">
                        <button class="border-[#006A51] text-[#006A51] border-2 px-4 py-2 rounded-md text-sm">Read
                            More</button>
                    </a>
                    <button
                        class="border-[#006A51] text-[#006A51] border-2 px-4 py-2 rounded-md text-sm buy-ticket-btn">Buy
                        Ticket</button>
                </div>
            </div>

       
    </div>
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
    </script>
        @endforeach
        @endif


    </div>
    @stop