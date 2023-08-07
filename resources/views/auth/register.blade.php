<x-guest-layout>  
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Register</h1>
    </div>                          
    <form class="user" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row col-sm-12 col-md-12 col-lg-12" >
                <input class="form-control form-control-user" id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                    placeholder="Enter User Name">
        </div>
        <div class="form-group">
            <input  id="email" placeholder="Enter Email Address " class="form-control form-control-user" type="email" name="email" :value="old('email')" required autocomplete="username" >
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
        
        <x-primary-button class="btn btn-primary btn-user btn-block">
            {{ __('Register') }}
        </x-primary-button>
    </form>

    <hr>
    <div class="text-center">
        <a class="small" href="{{ url('forgot-password') }}">Forgot Password?</a>
    </div>
    <div class="text-center">
        <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
    </div>
</x-guest-layout>

                            