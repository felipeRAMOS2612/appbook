<header class="h-16 bg-blue-100 flex items-center">
    <section class="w-full h-16 flex max-w-7xl mx-auto justify-between items-center">
    <div class="">
        <img class="h-full w-48" src="/logo/Logo-color.png">
    </div>
    <div class="flex justify-end grow flex-1">
        <x-dropdown>
            <x-slot name="trigger">
                <button class="px-3 py-2">
                    <div class="ml-1 flex items-center gap-2">
                        <i class="fa-solid fa-circle-user fa-xl"></i>
                        <svg class="fill-current h-4 w-4" style="color: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <div class="relative bg-yellow-50 sm:flex sm:justify-center sm:items-center right-0 w-full shadow-lg">
                    @if (Route::has('home'))
                        <div class="w-full p-1 text-right">
                            @auth
                                <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Mi perfil') }}</x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
        
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                    @else
                    <div class="flex flex-col text-start w-full rounded-md shadow-sm p-4">
                        <a href="{{ route('login.student') }}" class="font-semibold text-gray-600 hover:text-gray-900">Iniciar sesión estudiante</a>
                            <a href="{{route('login.teacher')}}" class="font-semibold text-gray-600 hover:text-gray-900">Iniciar sesión profesor</a>
                    </div>
                            @endauth

                    @endif
                </div>  
            </x-slot>
            
        </x-dropdown>
    </div>
    </section>
</header>

