<x-splade-form action="{{ route('login') }}" class="flex flex-col gap-6">

    <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus />
    <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="current-password" />
    <x-splade-checkbox id="remember_me" name="remember" :label="__('Remember me')" />

    <div class="flex justify-end items-center gap-4">

        @if (Route::has('password.request'))

            <Link href="{{ route('password.request') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                {{ __('Forgot your password?') }}
            </Link>

        @endif

        <x-splade-submit :label="__('Login')" />

    </div>

</x-splade-form>
