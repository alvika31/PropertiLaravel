<?php

namespace App\Providers;

use App\Models\Lokasi;
use App\Models\Properti;
use App\Models\TipeProperti;
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
        view()->composer(
            'pages.navbar',
            function ($view) {
                $view->with('model', Lokasi::all());
                $view->with('tipe', TipeProperti::all());
            }
        );

        Properti::deleting(function ($properti) {
            $properti->gallery()->delete();
            $properti->tipeunit()->delete();
        });

        view()->composer(
            'pages.footer',
            function ($view) {
                $view->with('model', Lokasi::all());
                $view->with('tipe', TipeProperti::all());
            }
        );
    }
}
