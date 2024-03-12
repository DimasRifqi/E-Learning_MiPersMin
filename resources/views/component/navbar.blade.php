<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<nav class="bg-white dark:bg-gray-900 fixed top-0 w-full z-10">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <a href="#" class="flex items-center space-x-3">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="text-2xl font-semibold text-gray-800 dark:text-white">Flowbite</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden md:block">
                <ul class="flex space-x-8">
                    <li><a href="{{ url('/') }}" class="text-gray-800 dark:text-white hover:text-blue-700">Home</a></li>
                    <li class="relative group">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-800 dark:text-white hover:text-blue-700 group">
                            Dropdown
                            <svg class="w-2.5 h-2.5 ml-1 inline-block transform group-hover:-rotate-180 transition duration-150 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="absolute z-10 hidden mt-2 py-2 w-44 bg-white dark:bg-gray-900 rounded-lg shadow-md">
                            <ul>
                                <li><a href="{{ url('/') }}" class="block px-4 py-2 text-gray-800 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">Dashboard</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-800 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">Settings</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-800 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">Earnings</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-800 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">Sign out</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" class="text-gray-800 dark:text-white hover:text-blue-700">Services</a></li>
                    <li><a href="#" class="text-gray-800 dark:text-white hover:text-blue-700">Pricing</a></li>
                    <li><a href="{{ url('contact') }}" class="text-gray-800 dark:text-white hover:text-blue-700">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
