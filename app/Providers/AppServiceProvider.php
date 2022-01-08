<?php

namespace App\Providers;

use App\Http\Middleware\Locale;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('lang', Locale::getLocale()); // Подключаем переменную языка ко всем шаблонам
    }
}
