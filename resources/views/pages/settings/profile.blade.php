<x-settings-layout
    :title="__('Profile settings')"
    :heading="__('Profile')"
    :subheading="__('Update your name and email address')"
>
    @if (session('status') === 'profile-information-updated')
        <div data-sp-toast='@json(['title' => __('Profile updated'), 'type' => 'success'])'></div>
    @endif

    <form method="POST" action="{{ route('user-profile-information.update') }}" class="field-group">
        @csrf
        @method('PUT')

        <div class="field">
            <label for="name" class="label">{{ __('Name') }}</label>
            <input
                id="name"
                name="name"
                type="text"
                class="input"
                value="{{ old('name', auth()->user()->name) }}"
                required
                autocomplete="name"
                @error('name', 'updateProfileInformation') aria-invalid="true" aria-describedby="name-error" @enderror
            />
            @error('name', 'updateProfileInformation')
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
                value="{{ old('email', auth()->user()->email) }}"
                required
                autocomplete="email"
                @error('email', 'updateProfileInformation') aria-invalid="true" aria-describedby="email-error" @enderror
            />
            @error('email', 'updateProfileInformation')
                <p class="field-error" id="email-error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary justify-self-start mt-2">
            {{ __('Save') }}
        </button>
    </form>

    <div class="separator my-10"></div>

    <div>
        <div class="space-y-1">
            <h3 class="text-base font-medium">{{ __('Delete account') }}</h3>
            <p class="text-sm/6 text-muted-foreground">{{ __('Delete your account and all of its resources') }}</p>
        </div>

        <button
            type="button"
            class="btn btn-destructive mt-6"
            data-sp-toggle="dialog"
            data-sp-target="#delete-account-dialog"
        >
            {{ __('Delete account') }}
        </button>
    </div>

    <dialog
        id="delete-account-dialog"
        class="dialog"
        aria-labelledby="delete-account-title"
        aria-describedby="delete-account-description"
        @error('password') open @enderror
    >
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
                    <h2 id="delete-account-title" class="text-lg font-semibold tracking-tight">
                        {{ __('Delete account') }}
                    </h2>
                    <p id="delete-account-description" class="text-sm/6 text-muted-foreground">
                        {{ __('This will permanently remove your account and all related data. Enter your password to confirm.') }}
                    </p>
                </div>

                <form method="POST" action="{{ route('profile.destroy') }}" class="grid gap-6">
                    @csrf
                    @method('DELETE')

                    <div class="field">
                        <label for="delete-password" class="sr-only">{{ __('Password') }}</label>
                        <div class="input-group">
                            <input
                                id="delete-password"
                                name="password"
                                type="password"
                                class="input"
                                placeholder="{{ __('Password') }}"
                                required
                                @error('password') aria-invalid="true" aria-describedby="delete-password-error" @enderror
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
                            <p class="field-error" id="delete-password-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <button type="button" class="btn" data-sp-dismiss="dialog">{{ __('Cancel') }}</button>
                        <button type="submit" class="btn btn-destructive">{{ __('Delete account') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </dialog>
</x-settings-layout>
