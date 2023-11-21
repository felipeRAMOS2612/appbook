<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class=" max-h-32 h-full bg-gray-100 shadow-md flex w-full lg:px-24 md:px-5 justify-between items-center">
        <div class="">
            <img class="h-full w-48" src="logo/Logo-color.png">
        </div>
        <div class="flex justify-end grow w-full flex-1">
            <x-dropdown align="right">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div class="ml-1 flex items-center gap-2">
                            <i class="fa-solid fa-circle-user fa-2xl"></i>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <div class="relative bg-blue-50 sm:flex sm:justify-center sm:items-center w-full bg-dots-darker bg-center">
                        @if (Route::has('home'))
                            <div class="w-full p-1 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900">Dashboard</a>
                                @else
                                <div class="flex flex-col text-start w-full rounded-md shadow-sm p-4">
                                    <a href="{{ route('login.student') }}" class="font-semibold text-gray-600 hover:text-gray-900">Iniciar sesión estudiante</a>
                                        <a href="{{route('login.teacher')}}" class="font-semibold text-gray-600 hover:text-gray-900">Iniciar sesión profesor</a>
                                </div>
                                @endauth
                            </div>
                        @endif
                    </div>  
                </x-slot>
            </x-dropdown>
        </div>
    </header>
  
</body>
</html>

