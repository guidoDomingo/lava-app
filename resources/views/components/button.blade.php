@props(['href' => '#contacto', 'variant' => 'primary'])
@php($styles = $variant === 'primary' ? 'bg-slate-950 text-white hover:bg-sky-600 shadow-lg shadow-slate-900/10' : 'bg-white text-slate-800 ring-1 ring-slate-200 hover:ring-sky-300')
<a href="{{ $href }}" {{ $attributes->merge(['class' => "inline-flex items-center justify-center gap-2 rounded-full px-5 py-3 text-sm font-semibold transition duration-300 $styles"]) }}>{{ $slot }}<x-icon name="arrow" class="h-4 w-4" /></a>
