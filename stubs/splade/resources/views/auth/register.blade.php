<x-splade-form action="{{ route('register') }}" class="flex flex-col gap-6">

    <x-splade-input id="name" type="text" name="name" :label="__('Name')" required autofocus />
    <x-splade-input id="email" type="email" name="email" :label="__('Email')" required />
    <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="new-password" />
    <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')" required />

    <div class="flex justify-end items-center gap-4">

        <Link href="{{ route('login') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
            {{ __('Already registered?') }}
        </Link>

        <x-splade-submit :label="__('Register')" />

    </div>

</x-splade-form>
