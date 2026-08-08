@props(['eyebrow' => null, 'title', 'text' => null, 'center' => false])
<div {{ $attributes->class(['max-w-2xl', 'mx-auto text-center' => $center]) }}>
    @if($eyebrow)<p class="mb-4 text-xs font-bold uppercase tracking-[.22em] text-sky-600">{{ $eyebrow }}</p>@endif
    <h2 class="font-display text-3xl font-semibold tracking-[-.045em] text-slate-900 sm:text-4xl lg:text-5xl">{{ $title }}</h2>
    @if($text)<p class="mt-5 text-base leading-7 text-slate-500 sm:text-lg">{{ $text }}</p>@endif
</div>
