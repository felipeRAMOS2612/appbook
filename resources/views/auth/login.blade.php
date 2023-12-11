<x-app-layout>
    <section 
    class="h-[80vh] w-full mx-auto rounded flex flex-col 
    items-center justify-center shadow-lg border bg-cover 
    bg-bottom bg-no-repeat bg-black/50" 
    style="background-image: url('/background/bg-login.jpg')">
        <div class="max-w-xl p-12 backdrop-blur-sm w-full flex flex-col bg-black/50 rounded shadow ">
    <!-- Session Status -->
            <div><h1 class="text-3xl font-bold mb-5 text-white text-center">Inicio de sesión</h1></div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form class="w-full" method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" class="text-white" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" class="text-white" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-white">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">

                    <x-primary-button class="ms-3 !bg-gray-300 !text-black hover:scale-105">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
