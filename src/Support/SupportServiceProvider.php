<?php

namespace XuanQuynh\Laravel\Support;

use Illuminate\Support\ServiceProvider;
use XuanQuynh\Laravel\Support\Presenter;

class SupportServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Presenter::setApplication($this->app);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
