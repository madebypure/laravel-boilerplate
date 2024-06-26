<div class="flex flex-col gap-6">

    <div class="text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="flex items-center justify-between">

        <x-splade-form action="{{ route('verification.send') }}">

            <x-splade-submit :label="__('Resend Verification Email')" />

        </x-splade-form>

        <Link href="{{ route('logout') }}" method="POST" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
            {{ __('Log Out') }}
        </Link>

    </div>

</div>
