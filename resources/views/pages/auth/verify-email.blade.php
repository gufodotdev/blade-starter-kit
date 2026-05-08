<x-auth-layout
    :title="__('Verify email')"
    :heading="__('Verify email')"
    :description="__('Please verify your email address by clicking on the link we just emailed to you')"
>
    @if (session('status') === 'verification-link-sent')
        <div data-sp-toast='@json(['title' => __('A new verification link has been sent to the email address you provided during registration'), 'type' => 'success'])'></div>
    @endif

    <div class="space-y-6 text-center">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-primary">
                {{ __('Resend verification email') }}
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-sm text-foreground underline decoration-border underline-offset-4 transition-colors hover:decoration-current">
                {{ __('Log out') }}
            </button>
        </form>
    </div>
</x-auth-layout>
