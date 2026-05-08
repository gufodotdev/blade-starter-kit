<x-app-layout :title="__('Dashboard')">
    @php
        $placeholder = '<svg class="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" fill="none"><defs><pattern id="placeholder-pattern" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M-3 13 15-5M-5 5l18-18M-1 21 17 3"/></pattern></defs><rect stroke="none" fill="url(#placeholder-pattern)" width="100%" height="100%"/></svg>';
    @endphp

    <div class="grid auto-rows-min gap-4 md:grid-cols-3">
        <div class="relative aspect-video overflow-hidden rounded-xl border">{!! $placeholder !!}</div>
        <div class="relative aspect-video overflow-hidden rounded-xl border">{!! $placeholder !!}</div>
        <div class="relative aspect-video overflow-hidden rounded-xl border">{!! $placeholder !!}</div>
    </div>
    <div class="relative min-h-40 flex-1 overflow-hidden rounded-xl border">{!! $placeholder !!}</div>
</x-app-layout>
