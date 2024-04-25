<x-splade-form action="{{ route('password.store') }}"
               :default="['email' => $request->email, 'token' => $request->route('token')]"
               class="flex flex-col gap-6"
>

    <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus />
    <x-splade-input id="password" type="password" name="password" :label="__('Password')" required />
    <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')" required />

    <div class="flex justify-end items-center">

        <x-splade-submit :label="__('Reset Password')" />

    </div>

</x-splade-form>
