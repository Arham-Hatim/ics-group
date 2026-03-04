<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            if (Schema::hasTable('contacts')) {
                $contact = Contact::first();
                View::share('contact', $contact);
            }
        } catch (\Exception $e) {
            // Silently fail if DB is not ready
        }
    }
}
