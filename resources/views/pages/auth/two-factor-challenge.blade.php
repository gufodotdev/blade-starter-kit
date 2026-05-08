@php
    $useRecovery = request()->boolean('recovery');
@endphp

<x-auth-layout
    :title="__('Two-factor authentication')"
    :heading="$useRecovery ? __('Recovery code') : __('Authentication code')"
    :description="$useRecovery
        ? __('Please confirm access to your account by entering one of your emergency recovery codes.')
        : __('Enter the authentication code provided by your authenticator application.')"
>
    <form method="POST" action="{{ route('two-factor.login.store') }}" class="field-group">
        @csrf

        @if ($useRecovery)
            <div class="field">
                <label for="recovery_code" class="label">{{ __('Recovery code') }}</label>
                <input
                    id="recovery_code"
                    name="recovery_code"
                    type="text"
                    class="input"
                    placeholder="{{ __('Enter recovery code') }}"
                    required
                    autofocus
                    @error('recovery_code') aria-invalid="true" aria-describedby="recovery_code-error" @enderror
                />
                @error('recovery_code')
                    <p class="field-error" id="recovery_code-error">{{ $message }}</p>
                @enderror
            </div>
        @else
            <div class="field">
                <label for="code" class="label">{{ __('Code') }}</label>
                <input
                    id="code"
                    name="code"
                    type="text"
                    inputmode="numeric"
                    autocomplete="one-time-code"
                    class="input"
                    placeholder="{{ __('123456') }}"
                    required
                    autofocus
                    @error('code') aria-invalid="true" aria-describedby="code-error" @enderror
                />
                @error('code')
                    <p class="field-error" id="code-error">{{ $message }}</p>
                @enderror
            </div>
        @endif

        <button type="submit" class="btn btn-primary w-full">
            {{ __('Continue') }}
        </button>
    </form>

    <p class="text-center text-sm text-muted-foreground">
        {{ __('or you can') }}
        <a href="{{ route('two-factor.login') }}{{ $useRecovery ? '' : '?recovery=1' }}" class="text-foreground underline decoration-border underline-offset-4 transition-colors hover:decoration-current">
            {{ $useRecovery ? __('login using an authentication code') : __('login using a recovery code') }}
        </a>
    </p>
</x-auth-layout>
