
<x-guest-layout>
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
            <p class="mb-4">We get it, stuff happens. Just enter your email address below
                and we'll send you a link to reset your password!</p>
        </div>
        <form class="user" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <input class="form-control form-control-user" id="email"  type="email" name="email" :value="old('email')" required autofocus
                    placeholder="Enter Email Address...">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
            {{-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                Reset Password
            </a> --}}
        </form>
        <hr>
        <div class="text-center">
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="small">Create an Account!</a>
        @endif
        </div>
        <div class="text-center">
            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
        </div>
</x-guest-layout>