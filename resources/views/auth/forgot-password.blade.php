<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¿Olvidaste tu password ?, coloca tu email de registro y te enviaremos un enlace para que puedas recuperarla.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-between my-5">
            <x-link 
            :enlace="route('login')"
            > 
                Iniciar Sessión
            </x-link>
           <x-link 
            :enlace="route('register')"
            > 
                Crear Cuenta
            </x-link>
        
        </div>
          <x-primary-button class="w-full justify-center">
                {{ __('Enviar Enlace') }}
        </x-primary-button>
    </form>
</x-guest-layout>
