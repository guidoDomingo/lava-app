<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_homepage_redirects_to_spanish(): void
    {
        $this->get('/')->assertRedirect('/es');
    }

    public function test_each_supported_language_returns_a_successful_response(): void
    {
        foreach (['es', 'en', 'pt'] as $locale) {
            $this->get("/{$locale}")
                ->assertOk()
                ->assertSee("lang=\"{$locale}\"", false);
        }
    }
}
