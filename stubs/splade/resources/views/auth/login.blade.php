<x-splade-form action="{{ route('login') }}" class="flex flex-col gap-6">

    <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus />

    <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="current-password" />

    <div class="flex justify-between items-center">

        <x-splade-checkbox id="remember_me" name="remember" :label="__('Remember me')" />

        <Link href="{{ route('password.request') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
            {{ __('Forgot your password?') }}
        </Link>

    </div>

    <x-splade-submit :label="__('Login')" />

</x-splade-form>

<h1 class="absolute bottom-4 text-center text-lg text-gray-500 dark:text-gray-300">

    Don't have an account yet?

    <Link href="{{ route('register') }}" class="text-blue-400 dark:text-blue-500 hover:text-blue-500 dark:hover:text-blue-600 transition duration-300">Sign up</Link>

</h1>
