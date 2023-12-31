<x-app-layout>
<main x-data="{isStudent: true}"  class="p-5 my-5 bg-gray-300 rounded max-w-5xl mx-auto">
    <div class="my-4 border-b border-gray-200">
        <ul class="flex aria-selected:bg-blue-500 flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="w-full flex-1 grow" role="presentation">
                <button 
                class="p-4 aria-selected:bg-blue-500 text-black w-full aria-selected:text-white rounded" 
                id="student-tab" 
                data-tabs-target="#student" 
                type="button" 
                role="tab" 
                aria-controls="profile" 
                x-on:click="isStudent = true"
                aria-selected="false">Registro estudiante</button>
            </li>
            <li class="me-2 w-full flex-1 grow" role="presentation">
                <button 
                class="aria-selected:bg-blue-500 aria-selected:text-white p-4 w-full hover:border-gray-300" 
                id="teacher-tab" 
                data-tabs-target="#teacher" 
                type="button" 
                role="tab" 
                x-on:click="isStudent = false"
                aria-controls="teacher" 
                aria-selected="false">Registro profesor</button>
            </li>
        </ul>
    </div>

    <div id="default-tab-content" class="text-center">
        <div class="hidden p-4 text-3xl text-blue-500 !font-bold rounded-lg" id="student" role="tabpanel" aria-labelledby="student-tab">
            REGISTRO ESTUDIANTE
        </div>
        <div class="hidden p-4 text-3xl text-blue-500 !font-bold rounded-lg" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
            REGISTRO PROFESOR
        </div>
    </div>
        
<form method="POST" id="form" class="grid grid-cols-2 gap-5" action="{{ route('register') }}">
    @csrf

    <template x-if="isStudent == true">
        <input type="hidden" name="type_of_register" value="student" />
    </template>

    <template x-if="isStudent == false">
        <input type="hidden" name="type_of_register" value="teacher" />
    </template>

    
    <div>
        <x-input-label for="rut" :value="__('RUT')" />
        <x-text-input id="rut" class="block mt-1 w-full" type="text" name="rut" :value="old('rut')"  autofocus autocomplete="name" />

    </div>

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" />
    </div>

    <div>
        <x-input-label for="last_name" :value="__('last_name')" />
        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"  autofocus autocomplete="name" />
    </div>

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autocomplete="username" />

    </div>

    <div>
        <x-input-label for="phone" :value="__('phone')" />
        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"  autofocus autocomplete="name" />

    </div>

    <div>
        <x-input-label for="address" :value="__('address')" />
        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"  autofocus autocomplete="name" />

    </div>

    <!-- Password -->
    <div >
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                         autocomplete="new-password" />


    </div>

    <!-- Confirm Password -->
    <div >
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation"  autocomplete="new-password" />


    </div>

    <div class="flex items-center w-full col-span-2 justify-between mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button type="button" id="submit_button" class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form> 
</main>

@if ($errors->get('rut'))
    <script>
        console.log($errors->get('rut'));
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ $errors->first("rut") }}',
        });
    </script>
@endif

</x-app-layout>
