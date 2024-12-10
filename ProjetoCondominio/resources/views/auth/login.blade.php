<div id="loginBg">
    <x-guest-layout class="login">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="flex justify-center mt-4 px-4 py-6">
                <p class="title">Bem vind@!</p>
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" placeholder="email@email.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" placeholder="Senha" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                @if (Route::has('password.request'))
                    <a class="text-sm text-black-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}" id="aPassword">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
            </div>
            <div class="flex items-center justify-center mt-4 py-4">
                <x-guest-button class="ms-3 bg-orange w-full">
                    {{ __('Login') }}
                </x-guest-button>
            </div>

            <div class="flex items-center justify-center mt-4 px-4 py-2 w-full">
                <span>ou use uma destas opções:</span>
            </div>

            <div class="flex items-center justify-between py-4 w-full">
                <div class="col-lg-6 flex">
                    <img class="icons" src="{{ asset('images/facebookIcon.png') }}" alt="facebookIcon">
                    <a href="{{ route('auth.redirection', 'facebook') }}">
                    <span class="spanIcons">Facebook</span>
                </a>
                </div>
                <div class="col-lg-6 flex">
                    <img class="icons" src="{{ asset('images/googleIcon.png') }}" alt="facebookIcon">
                    <a href="{{ route('auth.redirection', 'google') }}">
                        <span class="spanIcons">Google</span>
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-center mt-4 px-4 py-2 w-full">
                <span>Não tem conta?</span>
                <a href="{{ route('register') }}"><span id="spanRegister">Registre-se!</span></a>
            </div>

        </form>
    </x-guest-layout>
</div>
