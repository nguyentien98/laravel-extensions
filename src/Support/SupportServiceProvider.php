<?php

/*
 * This file is part of the Sericode package.
 *
 * (c) Nguyễn Xuân Quỳnh <nguyen.xuan.quynh@sericode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sericode\Laravel\Support;

use Illuminate\Support\ServiceProvider;
use Sericode\Laravel\Support\Presenter;

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
