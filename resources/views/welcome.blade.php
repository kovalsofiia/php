

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* Importing the Tailwind CSS styles at the top */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');

        /* ... (Your existing styles) ... */

        .bg-gradient-to-r {
            background: linear-gradient(to right, var(--tw-gradient-stops));
        }

        .from-blue-800 {
            --tw-gradient-from: rgb(18, 18, 114);
        }

        .to-purple-800 {
            --tw-gradient-to: rgb(112, 47, 189);
        }
    </style>


</head>
<body class="antialiased">
<header>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <a href="{{ route('cars.index') }}" class="text-green-800 font-bold">View Table</a>
    </div>
</header>

<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <!-- Displaying an explanation about Lab 5 when the user is logged in -->
                <p class="text-gray-600 dark:text-gray-400 mb-4">
                    Welcome to Lab 5! As a logged-in user, you have access to the table.
                </p>
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <!-- New Section with Dark Blue and Purple Background -->
    <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-r from-blue-800 to-purple-800 text-white">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Lab 5: Tailwind Magic</h1>
            <p class="text-lg">Explore the power of Tailwind CSS with dark blue and purple colors. Customize and create beautiful designs effortlessly.</p>
        </div>
    </div>
</div>
</body>
</html>
