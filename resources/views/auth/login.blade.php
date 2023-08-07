<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Login </h1>
    </div>
    <form class="user" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input class="form-control form-control-user block mt-1 w-full"
            type="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
            id="email" 
                placeholder="Enter Email Address...">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        
        <div class="form-group">
            <!-- Password -->
            <input class="form-control form-control-user block mt-1 w-full"
                id="password" 
                type="password"
                name="password"
                required autocomplete="current-password"placeholder="Enter Password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" /> 
        </div>

        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Remember
                    Me</label>
            </div>
        </div>
        <x-primary-button class="btn btn-primary btn-user btn-block">
            {{ __('Log in') }}
        </x-primary-button>
        {{-- <a href="index.html" class="btn btn-primary btn-user btn-block">
            Login
        </a> --}}
        <hr>
        </form>
    <hr>
    <div class="text-center">
        @if (Route::has('password.request'))
            <a class="small" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
        {{-- <a class="small" href="forgot-password.html">Forgot Password?</a> --}}
    </div>
    <div class="text-center">
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="small">Create an Account!</a>
    @endif
        {{-- <a class="small" href="register.html"></a> --}}
    </div>
</x-guest-layout>