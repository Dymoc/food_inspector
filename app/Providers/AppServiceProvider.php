<?php

namespace App\Providers;
use App\Services\ParcerService;
use Illuminate\Support\ServiceProvider;
use App\Services\UploadedService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ParcerContract::class, ParcerService::class);
        $this->app->bind(UploadedService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
