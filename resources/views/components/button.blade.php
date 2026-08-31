@props(['href' => '#contacto', 'variant' => 'primary'])
@php($styles = $variant === 'primary' ? 'bg-sky-900 text-white hover:bg-sky-700 shadow-lg shadow-sky-950/15' : 'bg-white text-sky-900 ring-1 ring-sky-200 hover:ring-sky-400')
<a href="{{ $href }}" {{ $attributes->merge(['class' => "inline-flex items-center justify-center gap-2 rounded-full px-5 py-3 text-sm font-semibold transition duration-300 $styles"]) }}>{{ $slot }}<x-app-icon name="arrow" class="h-4 w-4" /></a>
