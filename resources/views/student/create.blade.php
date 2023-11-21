<x-app-layout>
    <main class="md:p-12 min-h-screen bg-cover bg-no-repeat grayscale-[35%] flex justify-center items-center" style="background-image: url('/background/register.jpg')">
    <form 
    method="POST" 
    class=" max-w-3xl bg-white/75 w-full backdrop:blur-md p-5 h-96 rounded show grid grid-cols-2 gap-5 mx-auto" 
    action="{{ route('student.create') }}">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="last_name" :value="__('Apellido')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="rut" :value="__('Rut')" />
            <x-text-input id="rut" class="block mt-1 w-full" type="text" name="rut" :value="old('rut')" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="on" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="phone" :value="__('emergency_phone')" />
            <x-text-input id="emergency_phone" class="block mt-1 w-full" type="text" name="emergency_phone" :value="old('emergency_phone')" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

            <x-primary-button class="col-span-2 text-center flex justify-center">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
    </main>
</x-app-layout>