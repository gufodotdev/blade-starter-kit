<x-settings-layout :title="__('Security settings')">
    @if (session('status') === 'password-updated')
        <div data-sp-toast='@json(['title' => __('Password updated'), 'type' => 'success'])'></div>
    @endif

    <div class="space-y-1 mb-6">
        <h3 class="text-base font-medium">{{ __('Update password') }}</h3>
        <p class="text-sm/6 text-muted-foreground">{{ __('Ensure your account is using a long, random password to stay secure') }}</p>
    </div>

    <form method="POST" action="{{ route('user-password.update') }}" class="field-group">
        @csrf
        @method('PUT')

        <div class="field">
            <label for="current_password" class="label">{{ __('Current password') }}</label>
            <div class="input-group">
                <input
                    id="current_password"
                    name="current_password"
                    type="password"
                    class="input"
                    autocomplete="current-password"
                    required
                    @error('current_password', 'updatePassword') aria-invalid="true" aria-describedby="current_password-error" @enderror
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
            @error('current_password', 'updatePassword')
                <p class="field-error" id="current_password-error">{{ $message }}</p>
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
                    autocomplete="new-password"
                    required
                    @error('password', 'updatePassword') aria-invalid="true" aria-describedby="password-error" @enderror
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
            @error('password', 'updatePassword')
                <p class="field-error" id="password-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="password_confirmation" class="label">{{ __('Confirm new password') }}</label>
            <div class="input-group">
                <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    class="input"
                    autocomplete="new-password"
                    required
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

        <button type="submit" class="btn btn-primary justify-self-start mt-2">
            {{ __('Save password') }}
        </button>
    </form>

    @if ($canManageTwoFactor)
        <div class="separator my-10"></div>

        <div class="space-y-1 mb-6">
            <h3 class="text-base font-medium">{{ __('Two-factor authentication') }}</h3>
            <p class="text-sm/6 text-muted-foreground">
                @if ($twoFactorEnabled)
                    {{ __('You will be prompted for a secure pin during login, which you can retrieve from a TOTP application on your phone.') }}
                @else
                    {{ __('When you enable two-factor authentication, you will be prompted for a secure pin during login from a TOTP application on your phone.') }}
                @endif
            </p>
        </div>

        @if ($twoFactorEnabled)
            <div class="flex flex-col items-start gap-4">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-sp-toggle="dialog"
                    data-sp-target="#recovery-codes-dialog"
                >
                    {{ __('Show recovery codes') }}
                </button>

                <button
                    type="button"
                    class="btn btn-destructive"
                    data-sp-toggle="dialog"
                    data-sp-target="#disable-2fa-dialog"
                >
                    {{ __('Disable 2FA') }}
                </button>
            </div>

            <dialog id="recovery-codes-dialog" class="dialog" aria-labelledby="recovery-codes-title" @if (session('status') === 'recovery-codes-generated') open @endif>
                <div class="dialog-backdrop"></div>
                <div class="dialog-panel max-w-md">
                    <button
                        type="button"
                        class="btn btn-ghost btn-icon-xs absolute top-3 right-3"
                        aria-label="{{ __('Close') }}"
                        data-sp-dismiss="dialog"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                    <div class="dialog-content grid gap-6">
                        <div class="space-y-2">
                            <h2 id="recovery-codes-title" class="text-lg font-semibold tracking-tight">{{ __('Recovery codes') }}</h2>
                            <p class="text-sm/6 text-muted-foreground">{{ __('Store these codes safely. Each can be used once if you lose access to your authenticator app.') }}</p>
                        </div>
                        <div class="grid grid-cols-2 gap-2 rounded-lg border bg-muted/50 p-3">
                            @foreach ($recoveryCodes as $code)
                                <code class="rounded border bg-background px-2 py-1.5 text-center font-mono text-xs">{{ $code }}</code>
                            @endforeach
                        </div>
                        <form method="POST" action="{{ route('two-factor.regenerate-recovery-codes') }}" class="grid grid-cols-2 gap-2">
                            @csrf
                            <button type="button" class="btn" data-sp-dismiss="dialog">{{ __('Close') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Regenerate codes') }}</button>
                        </form>
                    </div>
                </div>
            </dialog>

            <dialog id="disable-2fa-dialog" class="dialog" aria-labelledby="disable-2fa-title">
                <div class="dialog-backdrop"></div>
                <div class="dialog-panel">
                    <button
                        type="button"
                        class="btn btn-ghost btn-icon-xs absolute top-3 right-3"
                        aria-label="{{ __('Close') }}"
                        data-sp-dismiss="dialog"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                    <div class="dialog-content grid gap-6">
                        <div class="space-y-2">
                            <h2 id="disable-2fa-title" class="text-lg font-semibold tracking-tight">{{ __('Disable two-factor authentication?') }}</h2>
                            <p class="text-sm/6 text-muted-foreground">{{ __('Your account will no longer require a verification code at login. You can always re-enable later.') }}</p>
                        </div>

                        <form method="POST" action="{{ route('two-factor.disable') }}" class="grid grid-cols-2 gap-2">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn" data-sp-dismiss="dialog">
                                {{ __('Cancel') }}
                            </button>
                            <button type="submit" class="btn btn-destructive">
                                {{ __('Disable 2FA') }}
                            </button>
                        </form>
                    </div>
                </div>
            </dialog>
        @elseif ($twoFactorPending)
            @php
                $animateOpen = session('status') === 'two-factor-authentication-enabled';
                $stayOpen = $errors->hasBag('confirmTwoFactorAuthentication');
                $isOpen = $animateOpen || $stayOpen;
            @endphp
            <button
                type="button"
                class="btn btn-primary"
                data-sp-toggle="dialog"
                data-sp-target="#two-factor-setup-dialog"
            >
                {{ __('Continue setup') }}
            </button>

            <dialog id="two-factor-setup-dialog" class="dialog" aria-labelledby="two-factor-setup-title" @if ($isOpen) open @endif>
                <div class="dialog-backdrop" @if ($animateOpen) data-state="open" @endif></div>
                <div class="dialog-panel" @if ($animateOpen) data-state="open" @endif>
                    <button
                        type="button"
                        class="btn btn-ghost btn-icon-xs absolute top-3 right-3"
                        aria-label="{{ __('Close') }}"
                        data-sp-dismiss="dialog"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                    <div class="dialog-content grid gap-6">
                        <div class="space-y-2">
                            <h2 id="two-factor-setup-title" class="text-lg font-semibold tracking-tight">{{ __('Enable two-factor authentication') }}</h2>
                            <p class="text-sm/6 text-muted-foreground">{{ __('Scan the QR code below with your authenticator app, or enter the provided setup key manually.') }}</p>
                        </div>

                        <div class="flex aspect-3/2 items-center justify-center rounded-lg border bg-muted/50">
                            <div class="relative rounded-lg bg-white p-4 dark:bg-white [&_svg]:size-32">
                                {!! $qrCodeSvg !!}
                                <div class="pointer-events-none absolute inset-0">
                                    <div class="absolute top-0 left-0 size-3 rounded-tl border-t-2 border-l-2 border-primary"></div>
                                    <div class="absolute top-0 right-0 size-3 rounded-tr border-t-2 border-r-2 border-primary"></div>
                                    <div class="absolute bottom-0 right-0 size-3 rounded-br border-b-2 border-r-2 border-primary"></div>
                                    <div class="absolute bottom-0 left-0 size-3 rounded-bl border-b-2 border-l-2 border-primary"></div>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">{{ __('Setup key') }}</label>
                            <input type="text" readonly value="{{ $manualSetupKey }}" class="input font-mono text-sm" />
                        </div>

                        <form method="POST" action="{{ route('two-factor.confirm') }}" id="two-factor-confirm-form" class="field-group">
                            @csrf
                            <div class="field">
                                <label for="code" class="label">{{ __('Verification code') }}</label>
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
                                    @error('code', 'confirmTwoFactorAuthentication') aria-invalid="true" aria-describedby="code-error" @enderror
                                />
                                @error('code', 'confirmTwoFactorAuthentication')
                                    <p class="field-error" id="code-error">{{ $message }}</p>
                                @enderror
                            </div>
                        </form>

                        <form method="POST" action="{{ route('two-factor.disable') }}" id="two-factor-cancel-form">
                            @csrf
                            @method('DELETE')
                        </form>

                        <div class="grid grid-cols-2 gap-2">
                            <button type="submit" form="two-factor-cancel-form" class="btn">
                                {{ __('Cancel') }}
                            </button>
                            <button type="submit" form="two-factor-confirm-form" class="btn btn-primary">
                                {{ __('Confirm') }}
                            </button>
                        </div>
                    </div>
                </div>
            </dialog>
        @else
            <form method="POST" action="{{ route('two-factor.enable') }}">
                @csrf
                <button type="submit" class="btn btn-primary">
                    {{ __('Enable 2FA') }}
                </button>
            </form>
        @endif
    @endif
</x-settings-layout>
