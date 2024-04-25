<x-splade-form action="{{ route('password.confirm') }}" class="flex flex-col gap-6">

    <div class="text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <x-splade-input id="password" type="password" name="password" required autocomplete="current-password" :label="__('Password')" />

    <div class="flex justify-end items-center">

        <x-splade-submit :label="__('Confirm')" />

    </div>

</x-splade-form>
