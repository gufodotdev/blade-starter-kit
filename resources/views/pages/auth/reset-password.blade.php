<x-auth-layout
    :title="__('Reset password')"
    :heading="__('Reset password')"
    :description="__('Please enter your new password below')"
>
    <form method="POST" action="{{ route('password.update') }}" class="field-group">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}" />

        <div class="field">
            <label for="email" class="label">{{ __('Email address') }}</label>
            <input
                id="email"
                name="email"
                type="email"
                class="input"
                value="{{ old('email', $request->email) }}"
                required
                autocomplete="email"
                readonly
                @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
            />
            @error('email')
                <p class="field-error" id="email-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="password" class="label">{{ __('New password') }}</label>
            <div class="input-group">
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="input"
                    placeholder="{{ __('New password') }}"
                    required
                    autofocus
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
            {{ __('Reset password') }}
        </button>
    </form>
</x-auth-layout>
