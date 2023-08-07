<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

{{-- 
<x-guest-layout>
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-2">RESET PASSWORD </h1>
    </div>
    <form class="user"method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
            <input class="form-control form-control-user" id="email"  type="email" name="email"  :value="old('email', $request->email)" required autofocus
                placeholder="Enter Email Address...">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input class="form-control form-control-user"
                id="password"
                type="password"
                name="password"
                required autocomplete="new-password" 
                placeholder="Enter New Password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="col-sm-6">
                <input class="form-control form-control-user" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            </div>
        </div>
        <x-primary-button>
            {{ __('Reset Password') }}
        </x-primary-button>
    </form>
    <hr>
</x-guest-layout> --}}