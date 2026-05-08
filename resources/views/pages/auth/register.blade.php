<x-auth-layout
    :title="__('Register')"
    :heading="__('Create an account')"
    :description="__('Enter your details below to create your account')"
>
    <form method="POST" action="{{ route('register') }}" class="field-group">
        @csrf

        <div class="field">
            <label for="name" class="label">{{ __('Name') }}</label>
            <input
                id="name"
                name="name"
                type="text"
                class="input"
                value="{{ old('name') }}"
                placeholder="{{ __('Full name') }}"
                required
                autofocus
                autocomplete="name"
                @error('name') aria-invalid="true" aria-describedby="name-error" @enderror
            />
            @error('name')
                <p class="field-error" id="name-error">{{ $message }}</p>
            @enderror
        </div>

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
                autocomplete="email"
                @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
            />
            @error('email')
                <p class="field-error" id="email-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="password" class="label">{{ __('Password') }}</label>
            <div class="input-group">
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="input"
                    placeholder="{{ __('Password') }}"
                    required
                    autocomplete="new-password"
                    @error('password') aria-invalid="true" aria-describedby="password-error" @enderror
                />
                <button
                    type="button"
                    class="input-group-btn-icon"
                    aria-label="{{ __('Show password') }}"
                    tabindex="-1"
                    onclick="const i=this.previousElementSibling;const h=i.type==='password';i.type=h?'text':'password';this.querySelector('[data-icon=eye]').classList.toggle('hidden',h);this.querySelector('[data-icon=eye-off]').classList.toggle('hidden',!h)"
                >
                    <svg data-icon="eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
                    <svg data-icon="eye-off" class="hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49"/><path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"/><path d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143"/><path d="m2 2 20 20"/></svg>
                </button>
            </div>
            @error('password')
                <p class="field-error" id="password-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="password_confirmation" class="label">{{ __('Confirm password') }}</label>
            <div class="input-group">
                <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    class="input"
                    placeholder="{{ __('Confirm password') }}"
                    required
                    autocomplete="new-password"
                />
                <button
                    type="button"
                    class="input-group-btn-icon"
                    aria-label="{{ __('Show password') }}"
                    tabindex="-1"
                    onclick="const i=this.previousElementSibling;const h=i.type==='password';i.type=h?'text':'password';this.querySelector('[data-icon=eye]').classList.toggle('hidden',h);this.querySelector('[data-icon=eye-off]').classList.toggle('hidden',!h)"
                >
                    <svg data-icon="eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
                    <svg data-icon="eye-off" class="hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49"/><path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"/><path d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143"/><path d="m2 2 20 20"/></svg>
                </button>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-full">
            {{ __('Create account') }}
        </button>
    </form>

    <p class="text-center text-sm text-muted-foreground">
        {{ __('Already have an account?') }}
        <a href="{{ route('login') }}" class="text-foreground underline decoration-border underline-offset-4 transition-colors hover:decoration-current">
            {{ __('Log in') }}
        </a>
    </p>
</x-auth-layout>
