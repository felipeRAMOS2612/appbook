<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
    <!-- Agrega enlaces a los estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body class="bg-gray-100 mx-auto">
    <!-- Navbar -->
    <nav class="Navbar mx-auto" style="width: 1280px; height: 77px; position: relative; background: rgba(64, 64, 64, 0); border-radius: 2px; overflow: hidden; border: 1px rgba(255, 255, 255, 0.10) solid">
        <div class="Icon Person" style="width: 59px; height: 58px; left: 1201px; top: 12px; position: absolute">
            <div class="Vector" style="width: 44.25px; height: 48.33px; left: 7.38px; top: 4.83px; position: absolute; background: #FFFF;">
                <!-- Cambié background a background-image para cargar la imagen -->
                <img src="{{ asset('images/iconperson.png') }}" style="width: 100%; height: 100%;" alt="Icono de Persona">
            </div>
        </div>
        <div class="ContainerLogo" style="width: 265px; height: 71px; left: 0px; top: 6px; position: absolute"></div>
        <img class="Logo" style="width: 240px; height: 131px; left: -20px; top: -34px; position: absolute; border-radius: 19px" src="{{ asset('images/logo.png') }}" alt="Logo de la aplicación">
    </nav>

    <!-- Contenido principal -->
    <div class="container mx-auto mt-8">
        <!-- Sección de Noticias con Carrusel -->
        <section class="mb-8">
            <!-- Carrusel de Imágenes -->
            <div x-data="{ slide: 0, totalSlides: 3 }">
                <div class="relative overflow-hidden">
                    <div class="flex transition-transform duration-300 ease-in-out" style="transform: translateX(-${slide * 100}%)">
                    <!-- Imágenes del carrusel -->
                        <div class="w-full">
                            <img src="{{ asset('images/devon-divine-Hzp-1ua8DVE-unsplash 1.png') }}" alt="Imagen 1" class="w-full h-64 object-cover">
                        </div>

                <!-- Agrega más imágenes según sea necesario -->
                    </div>
                </div>

        <!-- Controles del carrusel -->
        <div class="flex mt-2">
            <button @click="slide = (slide - 1 + totalSlides) % totalSlides" class="mr-2 px-2 py-1 bg-blue-500 text-white">Anterior</button>
            <button @click="slide = (slide + 1) % totalSlides" class="px-2 py-1 bg-blue-500 text-white">Siguiente</button>
        </div>
    </div>

            <!-- Tres Rectángulos -->
            <div class="flex mt-4">
                <!-- Primer Rectángulo - Ver Notas -->
            <!-- Rectángulo 1 -->
            <div class="Rectangle3 relative" style="width: 326px; height: 252px; background: #484BB4; overflow: hidden; margin-right: 10px;">
                <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-1/2 h-1/2 object-cover" src="{{ asset('images/tablero.png') }}" alt="Descripción de la imagen"> 
            </div>                                                                                                                                                                       

                <!-- Segundo Rectángulo -->
            <!-- Rectángulo 2 -->
            <div class="Rectangle4 relative" style="width: 326px; height: 252px; background: #FFD14C; overflow: hidden; margin-right: 10px;">
                <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-1/2 h-1/2 object-cover" src="{{ asset('images/academic.png') }}" alt="Descripción de la imagen"> 
            </div>

                <!-- Tercer Rectángulo -->
            <!-- Rectángulo 3 -->
            <div class="Rectangle5 relative" style="width: 326px; height: 252px; background: #D9D9D9; overflow: hidden; margin-right: 10px;">
                <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-1/2 h-1/2 object-cover" src="{{ asset('images/person.png') }}" alt="Descripción de la imagen">
            </div>
        </section>

        <!-- Servicios -->

        <div class="Rectangle6 relative" style="width: 595px; height: 845px; background: #F6F6F6; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
            
            <div class="Servicios text-black text-5xl font-bold font-['Inter'] mb-5">Servicios</div>
            
            <div class="Rectangle9 mx-auto mb-5" style="width: 555px; height: 82px; background: #8F00FF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
                <div class="MiPerfil text-white text-xl font-bold font-['Inter']">Mi perfil</div>
            </div>
            <div class="Rectangle11 mx-auto mb-5" style="width: 555px; height: 82px; background: #FFD14C; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
                <div class="MisAsignaturas text-black text-xl font-bold font-['Inter']">Mis asignaturas</div>
            </div>
            <div class="Rectangle10 mx-auto mb-5" style="width: 555px; height: 82px; background: #484BB4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
                <div class="MisNotas text-white text-xl font-bold font-['Inter']">Mis notas</div>
            </div>
            <div class="Rectangle12 mx-auto mb-5" style="width: 555px; height: 82px; background: #8F00FF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
                <div class="MisObservaciones text-white text-xl font-bold font-['Inter']">mis observaciones</div>
            </div>
            <div class="Rectangle13 mx-auto mb-5" style="width: 555px; height: 82px; background: #FFD14C; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
                <div class="Profesores text-black text-xl font-bold font-['Inter']">Profesores</div>
            </div>
        </div>

    </div>

    <!-- --footer -->
    <!-- Footer Start -->
    <footer class=" bg-blue-900  relative text-gray-200 ">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="py-[60px] px-0">
                        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                            <div class="lg:col-span-4 md:col-span-12">
                                <a href="#" class="text-[22px] focus:outline-none">
                                    <img class="h-12" src="images/Logo.png" alt="" />
                                </a>
                                <p class="mt-6 text-gray-300">
                                    Contactos
                                </p>      
                                <ul class="list-none mt-6">
                                    <li class="inline">
                                        <a href=""
                                            class="font-semibold tracking-wide align-middle transition duration-500 ease-in-out p-1 h-9 w-9 inline-flex items-center text-center justify-center text-sm border !border-gray-800 rounded-md hover:border-yellow-600  hover:bg-yellow-600 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-gray-300"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="inline">
                                        <a href=""
                                            class="font-semibold tracking-wide align-middle transition duration-500 ease-in-out p-1 h-9 w-9 inline-flex items-center text-center justify-center text-sm border !border-gray-800 rounded-md hover:border-yellow-600  hover:bg-yellow-600 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-gray-300"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="inline">
                                        <a href=""
                                            class="font-semibold tracking-wide align-middle transition duration-500 ease-in-out p-1 h-9 w-9 inline-flex items-center text-center justify-center text-sm border !border-gray-800 rounded-md hover:border-yellow-600  hover:bg-yellow-600 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-gray-300"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="inline">
                                        <a href=""
                                            class="font-semibold tracking-wide align-middle transition duration-500 ease-in-out p-0 h-9 w-9 inline-flex items-center text-center justify-center text-sm border !border-gray-800 rounded-md hover:border-yellow-600  hover:bg-yellow-600 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-gray-300"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->

                            <div class="lg:col-span-2 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">
                                    Servicios
                                </h5>
                                <ul class="list-none  mt-6">
                                    <li>
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Inicio</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Mi perfil</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Mis asignaturas</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Mis profesores</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="lg:col-span-3 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">
                                    Cuentas
                                </h5>
                                <ul class="list-none  mt-6">
                                    <li>
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Iniciar Sesión</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Cambio de Contraseña</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Cambio de correo</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Pedir cambio de información</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="lg:col-span-3 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">
                                    Legalidades
                                </h5>
                                <ul class="list-none  mt-6">
                                    <li>
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Terminos y condiciones</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Contrato</a>
                                    </li>
                                    <li class="mt-[10px]">
                                        <a href="#"
                                            class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out">
                                            Políticas de privacidad</a>
                                    </li>
                                </ul>

                            </div>
                            <!--end col-->
                        </div>
                        <!--end grid-->
                    </div>
                    <!--end col-->
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="py-7 px-0 border-t border-gray-800">
            <div class="container mx-auto px-6 text-center">
                <div class="grid md:grid-cols-2 items-center">
                    <div class="md:text-left text-center">
                        <p class="mb-0">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            Copyright Appbook
                        </p>
                    </div>
                </div>
                <!--end grid-->
            </div>
            <!--end container-->
        </div>
    </footer>
</body>
</html>