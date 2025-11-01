<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="user_type">User Type:</label>
                <select name="role_type_id" id="user_type" class="form-control" required>
                    <option value="" disabled selected>Select user type</option>
                    <option value="1">Admin</option>
                    <option value="2">Editor</option>
                    <option value="3">Viewer</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
</body>
</html>
@extends('layouts.frontend')
@section('content')
   <!-- form start -->

   <form class="max-w-md mx-auto p-8 flex flex-col space-y-8">
        <h3 class="text-4xl font-extrabold text-[#006A51] mb-5">Join Us</h3>

        <ul class="grid grid-cols-3 w-full md:grid-cols-3 gap-2">
            
        </ul>

        <div class="relative z-0 w-full mb-5">
            <input id="floating_email"
                class="block w-full py-2.5 bg-transparent border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none"
                placeholder=" " type="email" name="floating_email" required>
            <label for="floating_email"
                class="absolute text-lg text-gray-500 transition-all transform scale-75 -translate-y-8 top-3 origin-[0] peer-focus:text-[#006A51] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10">Email
                address</label>
        </div>





        <div class="grid md:grid-cols-2 gap-6">
            <div class="relative z-0 w-full mb-5">
                <input id="floating_first_name"
                    class="block w-full py-2.5 bg-transparent border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none"
                    placeholder=" " type="text" name="floating_first_name" required>
                <label for="floating_first_name"
                    class="absolute text-lg text-gray-400 transition-all transform scale-75 -translate-y-8 top-3 origin-[0] peer-focus:text-[#006A51] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10">First
                    name</label>
            </div>
            <div class="relative z-0 w-full mb-5">
                <input id="floating_last_name"
                    class="block w-full py-2.5 bg-transparent border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none"
                    placeholder=" " type="text" name="floating_last_name" required>
                <label for="floating_last_name"
                    class="absolute text-lg text-gray-400 transition-all transform scale-75 -translate-y-8 top-3 origin-[0] peer-focus:text-[#006A51] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10">Last
                    name</label>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="relative z-0 w-full mb-5">
                <input id="floating_phone"
                    class="block w-full py-2.5 bg-transparent border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none"
                    placeholder=" " type="tel" name="floating_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                <label for="floating_phone"
                    class="absolute text-lg text-gray-400 transition-all transform scale-75 -translate-y-8 top-3 origin-[0] peer-focus:text-[#006A51] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10">Phone
                    number</label>
            </div>
            <div class="relative z-0 w-full mb-5">
                <input id="floating_company"
                    class="block w-full py-2.5 bg-transparent border-b-2 border-gray-600 appearance-none focus:border-[#006A51] focus:outline-none"
                    placeholder=" " type="text" name="floating_company" required>
                <label for="floating_company"
                    class="absolute text-lg text-gray-400 transition-all transform scale-75 -translate-y-8 top-3 origin-[0] peer-focus:text-[#006A51] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10">Company
                    (Ex. Google)</label>
            </div>
        </div>

        <button type="submit"
            class="bg-gray-100 text-sm font-bold w-full py-2.5 rounded-lg text-center hover:bg-[#006A51] hover:text-[#006A51] focus:ring-4 focus:outline-none focus:ring-[#006A51] transition-all duration-300">Submit</button>
    </form>

    <!-- form end -->
    @stop
