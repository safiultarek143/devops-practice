@extends('layouts.frontend')
@section('content')
  <!-- member card -->
   <!-- Modal -->
<div id="details-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white w-11/12 md:w-1/2 rounded-lg p-6">
        <button id="close-modal" class="text-red-500 text-xl font-bold float-right">×</button>
        <div id="modal-content" class="text-center mt-4">
            <h2 id="modal-name" class="text-2xl font-bold"></h2>
            <p id="modal-role" class="text-lg mt-2"></p>
            <img id="modal-image" class="w-48 h-48 mx-auto mt-4 object-cover rounded-full" alt="Member Image" />
        </div>
    </div>
</div>
  <div class="max-w-screen-xl mx-4 lg:mx-auto">
        <div class="grid lg:grid-cols-6  gap-4 my-12">
            <!-- card -->
            @if($members->count())
            @foreach($members  as $member)
            <div class="card border w-full max-w-xs mx-auto">
                <img class="w-full object-cover h-48" src="{{ asset(($member->image)) }}" alt="Abdur Rahman">
                <div class="text-center bg-[#F0FBF7] py-8">
                    <h1 class="text-lg font-bold">{{ $member->member_name }}</h1>
                    <p>{{ $member->member_title }}</p>
                </div>
            </div>
            @endforeach
            @endif
            <!-- card -->



        </div>
    </div>
    @stop
    @push('run_custom_jquery')
    <script>
         // Select elements
    const modal = document.getElementById('details-modal');
    const closeModal = document.getElementById('close-modal');
    const modalName = document.getElementById('modal-name');
    const modalRole = document.getElementById('modal-role');
    const modalImage = document.getElementById('modal-image');

    // Add event listeners to cards
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('click', () => {
            // Get data from card
            const name = card.querySelector('h1').textContent;
            const role = card.querySelector('p').textContent;
            const image = card.querySelector('img').src;

            // Update modal content
            modalName.textContent = name;
            modalRole.textContent = role;
            modalImage.src = image;

            // Show modal
            modal.classList.remove('hidden');
        });
    });

    // Close modal
    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Close modal when clicking outside the modal
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });

    </script>
@endpush


<body>



    