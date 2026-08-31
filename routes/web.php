<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/es');

Route::get('/{locale}', function (string $locale) {
    abort_unless(in_array($locale, ['es', 'en', 'pt'], true), 404);
    app()->setLocale($locale);

    return view('welcome', ['business' => config('laundry')]);
})->where('locale', 'es|en|pt')->name('home');

Route::get('/sitemap.xml', function () {
    $lastModified = now()->toAtomString();
    $urls = collect(['es', 'en', 'pt'])->map(fn ($locale) => sprintf(
        "    <url>\n        <loc>%s</loc>\n        <lastmod>%s</lastmod>\n        <changefreq>weekly</changefreq>\n        <priority>1.0</priority>\n    </url>",
        e(url($locale)),
        $lastModified,
    ))->implode("\n");

    return response(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
{$urls}
</urlset>
XML, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');
