<x-settings-layout
    :title="__('Appearance settings')"
    :heading="__('Appearance')"
    :subheading="__('Update the appearance of your account')"
>
    <div class="tab-list" role="radiogroup" aria-label="{{ __('Appearance') }}">
        <button type="button" class="tab [html[data-appearance=light]_&]:bg-background [html[data-appearance=light]_&]:shadow-sm" role="radio" data-appearance="light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>
            {{ __('Light') }}
        </button>
        <button type="button" class="tab [html[data-appearance=dark]_&]:bg-background [html[data-appearance=dark]_&]:shadow-sm" role="radio" data-appearance="dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
            {{ __('Dark') }}
        </button>
        <button type="button" class="tab [html[data-appearance=system]_&]:bg-background [html[data-appearance=system]_&]:shadow-sm" role="radio" data-appearance="system">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
            {{ __('System') }}
        </button>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('[data-appearance]').forEach((btn) => {
                if (btn.tagName !== 'BUTTON') return;
                btn.addEventListener('click', () => window.appearance.set(btn.dataset.appearance));
            });
        });
    </script>
</x-settings-layout>
