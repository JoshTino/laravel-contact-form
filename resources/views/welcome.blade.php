<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
           
    </head>
    <body class="bg-gray-200">

        <div class="flex justify-center">
            <div class="w-4/12 bg-white rounded-lg p-6 mt-4">

                
                <form action="{{ route('contacts') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <h1 class="text-center text-2xl font-bold">Contact Form</h1>
                    </div>

                    @if (session()->has('status'))
                        <div class="mb-4 bg-green-300 p-2 text-white font-medium">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-4">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name" class="bg-gray-100 border-2 border-blue-200 @error('name') border-red-500 @enderror w-full p-4 rounded-lg" value="{{ old('name') }}" />
                    </div>

                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email" class="bg-gray-100 border-2 border-blue-200 @error('email') border-red-500 @enderror w-full p-4 rounded-lg" value="{{ old('email') }}" />
                    </div>

                    <div class="mb-4">
                        <label for="message" class="sr-only">Message</label>
                        <textarea id="message" name="message" placeholder="Message" class="bg-gray-100 border-2 border-blue-200 @error('message') border-red-500 @enderror w-full p-4 rounded-lg">{{ old('message') }}</textarea>
                    </div>

                    <div class="mb-2">
                        <button class="bg-blue-700 text-white py-2 px-6 cursor-pointer rounded-md">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
