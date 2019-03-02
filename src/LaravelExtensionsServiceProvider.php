<?php

namespace Sepiphy\Laravel;

use Illuminate\Support\AggregateServiceProvider;

class LaravelExtensionsServiceProvider extends AggregateServiceProvider
{
    /**
     * {@inheritdoc}
     */
    protected $providers = [
        \Sepiphy\Laravel\Console\ConsoleServiceProvider::class,
        \Sepiphy\Laravel\Repositories\RepositoryServiceProvider::class,
        \Sepiphy\Laravel\Support\SupportServiceProvider::class,
    ];
}
