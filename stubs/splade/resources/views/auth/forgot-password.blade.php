<x-splade-form action="{{ route('password.email') }}" class="flex flex-col gap-6">

    <div class="text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus class="block w-full" />

    <div class="flex items-center justify-end">

        <x-splade-submit :label="__('Email Password Reset Link')" />

    </div>

</x-splade-form>
