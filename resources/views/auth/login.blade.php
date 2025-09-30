<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">

        @csrf
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img class="mb-4" src="{{ asset('img/gambar.jpg') }}" alt="" height="50" />
            <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
            <div class="form-floating">
                <input type="text" name="username" class="form-control" value="{{  old('username') }}" id="username"
                    placeholder="username" />
                <label for="username">Username</label>
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword"
                    placeholder="Password" />
                <label for="Password">Password</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="my-3 form-check text-start">
                <input class="form-check-input" type="checkbox" value="remember" id="checkDefault" />
                <label class="form-check-label" for="checkDefault">
                    Ingatkan Saya
                </label>
            </div>
            <button class="py-2 btn btn-primary w-100" type="submit">
                Masuk
            </button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p>
        </form>
</x-guest-layout>
