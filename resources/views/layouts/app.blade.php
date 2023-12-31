<!DOCTYPE html>
<html lang="es">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/verify-fields.js', 'resources/js/register-grade.js', 'resources/css/register-grade.css', 'resources/js/select-user-register.js'])
    </head>
    <body class="font-sans antialiased">
        <div class=" bg-gray-50">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <footer class="h-full w-full py-5 flex max-sm:flex-col bg-[var(--primary-color)]">
            <div class="md:px-12 hover:[&>div>ul>li>a]:!text-[var(--secondary-color)] [&>div>ul>li>a]:transition flex max-sm:gap-5 gap-16 grow flex-wrap mx-auto justify-between px-5 flex-1 [&>div>h2]:mt-3">
              
                <div class="">
                    <h2 class="!text-2xl text-white">Contacto</h2>
                    <ul class="[&>li]:!text-white [&>li>a]:!text-white">
                        <li class="flex items-center gap-1"><a href="/" class="contacto" >Whatsapp</a></li>
                        <li class="flex items-center gap-1"><a href="/nosotros" class="contacto">Correo</a></li>
                        <li class="flex items-center gap-1"><a href="/servicios" class="contacto">Tervicios</a></li>
                    </ul>
                </div>
  
                <div class="">
                      <h2 class="!text-2xl text-white ">Servicios</h2>
                      <ul class="[&>li]:!text-white [&>li>a]:!text-white">
                          <li class="flex items-center gap-1"><a href="/glosario" class="contacto" >Inicio</a></li>
                          <li class="flex items-center gap-1"><a href="/aliados" class="contacto">Mis Asignaturas</a></li>
                          <li class="flex items-center gap-1"><a href="/aliados" class="contacto">Mis Profesores</a></li>
                      </ul>
                </div>

                <div class="">
                      <h2 class="!text-2xl text-white">Cuenta</h2>
                      <ul class="[&>li]:!text-white [&>li>a]:!text-white">
                          <li class="flex items-center gap-1"><a href="/sala-de-prensa" class="contacto">Mi Perfil</a></li>
                          <li class="flex items-center gap-1"><a href="#" class="contacto" >Cambio contraseña</a></li>
                          <li class="flex items-center gap-1"><a href="#" class="contacto" >cambio información</a></li>
                      </ul>
                </div>

                <div class="">
                    <h2 class="!text-2xl text-white">Legalidades</h2>
                    <ul class="[&>li]:!text-white [&>li>a]:!text-white">
                        <li class="flex items-center gap-1"><a href="/sala-de-prensa" class="contacto">Términos y condiciones</a></li>
                        <li class="flex items-center gap-1"><a href="#" class="contacto" >Contrato</a></li>
                        <li class="flex items-center gap-1"><a href="#" class="contacto" >Politicas de privacidad</a></li>
                    </ul>
                </div>

                  
            </div>

            <div class=" px-2 flex sm:justify-end justify-center grow flex-1 text-end w-full">
                <img class="h-full text-end w-56 min-w-[254px] object-contain" src="/logo/Logo-blanco.png">
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    </body>
</html>
