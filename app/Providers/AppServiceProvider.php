<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // global sharing
        view()->share('globalVar', 'globalVarValue');
        // custom sharing to a single view
        view()->composer('admin.modules.index', function ($view) {
            $view->with('customVar', 'customVarValue');
        });
        // custom sharing to a multiple views
        view()->composer('admin.modules.*', function ($view) {
            $view->with('customToGroup', 'customToGroupValue');
        });
        // global value shared by binding a view composer class
        view()->composer('*', 'App\Http\ViewComposers\ComposerClass');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
