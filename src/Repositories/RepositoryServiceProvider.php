<?php

namespace XuanQuynh\Laravel\Repositories;

use Illuminate\Support\ServiceProvider;
use XuanQuynh\Laravel\Repositories\Repository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->resolving(function ($repository, $app) {
            if ($repository instanceof Repository) {
                $repository->setApplication($app);

                $repository->setModel(
                    $app->make($repository->getModelName())
                );
            }
        });
    }
}
