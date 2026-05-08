@props(['title' => null])

<x-base-layout :title="$title">
    <div class="sidebar">
        <div class="sidebar-backdrop"></div>
        <aside class="sidebar-panel" id="app-sidebar">
            <div class="sidebar-content">
                <header class="sidebar-header">
                    <a href="{{ route('dashboard') }}" class="menu-btn menu-btn-lg">
                        <div class="flex items-center justify-center size-8 rounded-md bg-primary text-primary-foreground shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 42" class="size-5 fill-current"><path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17.2 5.633 8.6.855 0 5.633v26.51l16.2 9 16.2-9v-8.442l7.6-4.223V9.856l-8.6-4.777-8.6 4.777V18.3l-5.6 3.111V5.633ZM38 18.301l-5.6 3.11v-6.157l5.6-3.11V18.3Zm-1.06-7.856-5.54 3.078-5.54-3.079 5.54-3.078 5.54 3.079ZM24.8 18.3v-6.157l5.6 3.111v6.158L24.8 18.3Zm-1 1.732 5.54 3.078-13.14 7.302-5.54-3.078 13.14-7.3v-.002Zm-16.2 7.89 7.6 4.222V38.3L2 30.966V7.92l5.6 3.111v16.892ZM8.6 9.3 3.06 6.222 8.6 3.143l5.54 3.08L8.6 9.3Zm21.8 15.51-13.2 7.334V38.3l13.2-7.334v-6.156ZM9.6 11.034l5.6-3.11v14.6l-5.6 3.11v-14.6Z"/></svg>
                        </div>
                        <div class="font-medium truncate">{{ __('Laravel Starter Kit') }}</div>
                    </a>
                </header>

                <nav class="sidebar-menu">
                    <div class="menu-group">
                        <span class="menu-label">{{ __('Platform') }}</span>
                        <a href="{{ route('dashboard') }}" class="menu-btn {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
                            {{ __('Dashboard') }}
                        </a>
                    </div>
                    <div class="menu-group mt-auto">
                        <a href="https://github.com/gufodotdev/blade-starter-kit" target="_blank" rel="noopener" class="menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                            {{ __('Repository') }}
                        </a>
                        <a href="https://startingpointui.com" target="_blank" rel="noopener" class="menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 7v14"/><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"/></svg>
                            {{ __('Documentation') }}
                        </a>
                    </div>
                </nav>

                <footer class="sidebar-footer">
                    <button
                        class="menu-btn menu-btn-lg"
                        data-sp-toggle="dropdown"
                        data-sp-target="#user-menu"
                        data-sp-placement="right-end"
                        aria-expanded="false"
                    >
                        <span class="avatar-fallback bg-muted-foreground/10 border">
                            {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                        </span>
                        <div class="grid flex-1 text-left text-sm leading-tight">
                            <span class="truncate font-medium">{{ auth()->user()->name }}</span>
                            <span class="truncate text-xs text-muted-foreground">{{ auth()->user()->email }}</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-auto"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                    </button>
                    <div id="user-menu" class="dropdown min-w-56">
                        <div class="dropdown-label flex items-center gap-2 px-1 py-1.5">
                            <span class="avatar-fallback bg-muted-foreground/10">
                                {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                            </span>
                            <div class="grid flex-1 text-left text-sm leading-tight">
                                <span class="truncate font-medium">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs text-muted-foreground">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                        <div class="dropdown-separator"></div>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915"/><circle cx="12" cy="12" r="3"/></svg>
                            {{ __('Settings') }}
                        </a>
                        <div class="dropdown-separator"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item w-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 17 5-5-5-5"/><path d="M21 12H9"/><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/></svg>
                                {{ __('Log out') }}
                            </button>
                        </form>
                    </div>
                </footer>
            </div>
        </aside>

        <main class="sidebar-page flex flex-col">
            <header class="flex items-center gap-2 border-b px-4 h-14">
                <button
                    class="btn btn-ghost btn-icon-sm -ml-2"
                    data-sp-toggle="sidebar"
                    data-sp-target="#app-sidebar"
                    aria-label="{{ __('Toggle sidebar') }}"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M9 3v18"/></svg>
                </button>
                @if ($title)
                    <div class="separator separator-vertical self-center h-4 -ml-1 mr-1"></div>
                    <nav class="breadcrumb">
                        <span class="breadcrumb-page">{{ $title }}</span>
                    </nav>
                @endif
            </header>

            <div class="flex flex-1 flex-col gap-4 p-6">
                {{ $slot }}
            </div>
        </main>
    </div>
</x-base-layout>
