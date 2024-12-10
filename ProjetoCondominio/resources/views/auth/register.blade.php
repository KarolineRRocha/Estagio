<div id="registerBg">
    <x-guest-layout class="register">
        <div class="registerForm">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="flex justify-center mt-4 px-4 py-6">
                    <p class="title">Registre-se!</p>
                </div>

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" placeholder="Nome" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" placeholder="email@email.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Senha')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" placeholder="Senha" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirme sua senha')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Confirme sua senha" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex justify-center mt-4 py-4">
                    <x-guest-button class="ms-4 bg-mediumBlue w-full">
                        {{ __('Criar conta') }}
                    </x-guest-button>
                </div>

                <div class="flex items-center justify-center mt-4">
                    <a id="aRegister" href="{{ route('login') }}">
                        {{ __('Já possui conta?') }}
                    </a>
                </div>
            </form>
        </div>
    </x-guest-layout>
</div>
