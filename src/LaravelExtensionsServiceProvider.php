<?php

/*
 * This file is part of the Sepiphy package.
 *
 * (c) Quynh Xuan Nguyen <seriquynh@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
