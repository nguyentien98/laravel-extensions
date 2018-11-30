<?php

namespace XuanQuynh\Laravel\Repositories;

use Illuminate\Support\ServiceProvider;
use XuanQuynh\Laravel\Repositories\Repository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app->resolving(function ($instance, $app) {
            if ($instance instanceof Repository) {
                $instance->setApplication($app);
            }
        });
    }
}
