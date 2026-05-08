<x-auth-layout
    :title="__('Forgot password')"
    :heading="__('Forgot password')"
    :description="__('Enter your email to receive a password reset link')"
>
    @if (session('status'))
        <div data-sp-toast='@json(['title' => session('status'), 'type' => 'success'])'></div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="field-group">
        @csrf

        <div class="field">
            <label for="email" class="label">{{ __('Email address') }}</label>
            <input
                id="email"
                name="email"
                type="email"
                class="input"
                value="{{ old('email') }}"
                placeholder="email@example.com"
                required
                autofocus
                autocomplete="email"
                @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
            />
            @error('email')
                <p class="field-error" id="email-error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-full">
            {{ __('Email password reset link') }}
        </button>
    </form>

    <p class="text-center text-sm text-muted-foreground">
        {{ __('Or, return to') }}
        <a href="{{ route('login') }}" class="text-foreground underline decoration-border underline-offset-4 transition-colors hover:decoration-current">
            {{ __('log in') }}
        </a>
    </p>
</x-auth-layout>
