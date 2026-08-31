@props(['icon', 'title', 'description', 'price' => null])
<article {{ $attributes->merge(['class' => 'group rounded-3xl bg-white p-7 ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-sky-900/5']) }}>
 <div class="mb-8 flex h-12 w-12 items-center justify-center rounded-2xl bg-sky-50 text-sky-600 transition group-hover:bg-sky-600 group-hover:text-white"><x-app-icon :name="$icon" class="h-6 w-6" /></div>
 <h3 class="text-lg font-bold text-slate-900">{{ $title }}</h3><p class="mt-3 leading-6 text-slate-500">{{ $description }}</p>
 <div class="mt-6 flex items-center justify-between"><span class="text-sm font-semibold text-slate-500">{{ $price ?: 'Consulta sin compromiso' }}</span><a href="#contacto" class="text-sm font-bold text-sky-600">Consultar <span aria-hidden="true">→</span></a></div>
</article>
