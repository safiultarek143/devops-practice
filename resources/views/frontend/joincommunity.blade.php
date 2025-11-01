@extends('layouts.frontend')
@section('content')

<form class="max-w-md mx-auto p-8 flex flex-col space-y-8" method="POST" action="{{ route('register.community') }}">
    @csrf
    <h3 class="text-4xl font-extrabold text-[#006A51] mb-5">Join Us</h3>
    <fieldset class="w-full mb-5">
        <ul class="grid grid-cols-3 w-full md:grid-cols-3 gap-2">
            <li>
                <input id="member" class="hidden peer" type="radio" value="4" name="role_type_id" required>
                <label for="member"
                    class="block w-full py-2 px-5 border border-gray-200 shadow text-gray-600 text-center cursor-pointer transition-all duration-300 peer-checked:bg-green-600 peer-checked:text-white hover:bg-gray-200">
                    <span class="capitalize text-sm font-bold">Member</span>
                </label>
            </li>
            <li>
                <input id="sponsor" class="hidden peer" type="radio" value="5" name="role_type_id" required>
                <label for="sponsor"
                    class="block w-full py-2 px-5 border border-gray-200 shadow text-gray-600 text-center cursor-pointer transition-all duration-300 peer-checked:bg-blue-600 peer-checked:text-white hover:bg-gray-200">
                    <span class="capitalize text-sm font-bold">Sponsor</span>
                </label>
            </li>
            <li>
                <input id="youth" class="hidden peer" type="radio" value="6" name="role_type_id" required>
                <label for="youth"
                    class="block w-full py-2 px-5 border border-gray-200 shadow text-gray-600 text-center cursor-pointer transition-all duration-300 peer-checked:bg-yellow-600 peer-checked:text-white hover:bg-gray-200">
                    <span class="capitalize text-sm font-bold">Youth</span>
                </label>
            </li>
        </ul>
    </fieldset>
    


    <div class="relative z-0 w-full mb-5">
        <input id="floating_email"
            class="block w-full py-2.5 bg-transparent border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none"
            placeholder=" " type="email" name="email" required>
        <label for="floating_email"
            class="absolute text-lg text-gray-500 transition-all transform scale-75 -translate-y-8 top-3 origin-[0] peer-focus:text-[#006A51] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10">Email
            address</label>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="relative z-0 w-full mb-5">
            <input id="floating_first_name"
                class="block w-full py-2.5 bg-transparent border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none"
                placeholder=" " type="text" name="first_name" required>
            <label for="floating_first_name"
                class="absolute text-lg text-gray-400 transition-all transform scale-75 -translate-y-8 top-3 origin-[0] peer-focus:text-[#006A51] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10">First
                name</label>
        </div>
        <div class="relative z-0 w-full mb-5">
            <input id="floating_last_name"
                class="block w-full py-2.5 bg-transparent border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none"
                placeholder=" " type="text" name="last_name" required>
            <label for="floating_last_name"
                class="absolute text-lg text-gray-400 transition-all transform scale-75 -translate-y-8 top-3 origin-[0] peer-focus:text-[#006A51] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10">Last
                name</label>
        </div>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="relative z-0 w-full mb-5">
            <input id="floating_phone"
                class="block w-full py-2.5 bg-transparent border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none"
                placeholder=" " type="tel" name="phone"  required>
            <label for="floating_phone"
                class="absolute text-lg text-gray-400 transition-all transform scale-75 -translate-y-8 top-3 origin-[0] peer-focus:text-[#006A51] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10">Phone
                number</label>
        </div>
        <div class="relative z-0 w-full mb-5">
            <input id="floating_company"
                class="block w-full py-2.5 bg-transparent border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none"
                placeholder=" " type="text" name="company" required>
            <label for="floating_company"
                class="absolute text-lg text-gray-400 transition-all transform scale-75 -translate-y-8 top-3 origin-[0] peer-focus:text-[#006A51] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10">Company
                (Ex. Google)</label>
        </div>
    </div>

    <!-- <div class="relative z-0 w-full mb-5">
        <label for="user_type" class="block mb-2 text-sm font-medium text-gray-700">User Type:</label>
        <select name="role_type_id" id="user_type" class="block w-full py-2.5 border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none" required>
            <option value="" disabled selected>Select user type</option>
            <option value="4">Member</option>
            <option value="5">Sponsor</option>
            <option value="6">Youth</option>
        </select>
    </div> -->

    <button type="submit"
        class="bg-gray-100 text-sm font-bold w-full py-2.5 rounded-lg text-center hover:bg-[#006A51] hover:text-[#ffffff] focus:ring-4 focus:outline-none focus:ring-[#006A51] transition-all duration-300">Submit</button>
</form>

@stop
