@props([
    'title' => null,
    'heading' => null,
    'subheading' => null,
])

<x-app-layout :title="$title ?? __('Settings')">
    <div class="flex flex-col gap-6 w-full">
        <div class="space-y-2">
            <h1 class="text-xl font-medium">{{ __('Settings') }}</h1>
            <p class="text-sm/6 text-muted-foreground">{{ __('Manage your profile and account settings') }}</p>
        </div>

        <div class="flex items-start gap-12 max-md:flex-col max-md:gap-6">
            <nav class="menu-group w-full md:w-52" aria-label="{{ __('Settings') }}">
                <a href="{{ route('profile.edit') }}" class="menu-btn {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
                    {{ __('Profile') }}
                </a>
                <a href="{{ route('security.edit') }}" class="menu-btn {{ request()->routeIs('security.edit') ? 'active' : '' }}">
                    {{ __('Security') }}
                </a>
            </nav>

            <div class="separator md:hidden"></div>

            <div class="flex-1 w-full max-w-lg">
                @if ($heading)
                    <div class="space-y-1 mb-6">
                        <h2 class="text-base font-medium">{{ $heading }}</h2>
                        @if ($subheading)
                            <p class="text-sm/6 text-muted-foreground">{{ $subheading }}</p>
                        @endif
                    </div>
                @endif

                {{ $slot }}
            </div>
        </div>
    </div>
</x-app-layout>
