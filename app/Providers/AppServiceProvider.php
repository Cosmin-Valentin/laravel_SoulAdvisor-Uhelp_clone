<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Collection::macro('filterByStatus', function ($status) {
            return $this->filter(function ($item) use ($status) {
                return $item->status === $status;
            });
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
