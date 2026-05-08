@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ? $title . ' - ' . config('app.name') : config('app.name') }}</title>

    @fonts

    {{-- Light/dark theme preference. --}}
    <script>
        (function () {
            const KEY = 'appearance';
            const media = window.matchMedia('(prefers-color-scheme: dark)');

            function resolve() {
                const stored = localStorage.getItem(KEY);
                return stored === 'light' || stored === 'dark' ? stored : 'system';
            }

            function apply(value) {
                const isDark = value === 'dark' || (value === 'system' && media.matches);
                document.documentElement.classList.toggle('dark', isDark);
                document.documentElement.dataset.appearance = value;
            }

            window.appearance = {
                get: resolve,
                set(value) {
                    if (!['light', 'dark', 'system'].includes(value)) return;
                    value === 'system' ? localStorage.removeItem(KEY) : localStorage.setItem(KEY, value);
                    apply(value);
                },
            };

            // Re-apply when the OS scheme changes, if user is on system preference.
            media.addEventListener('change', () => {
                if (resolve() === 'system') apply('system');
            });

            apply(resolve());
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body>
    {{ $slot }}
</body>
</html>
