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

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder as QBuilder;
use Illuminate\Database\Eloquent\Builder as EBuilder;

abstract class Query
{
    /**
     * Build a builder with the given request.
     *
     * @param  QBuilder|EBuilder  $builder
     * @param  Request  $request
     * @return QBuilder|EBuilder
     */
    public function build($builder, $request)
    {
        $methods = get_class_methods($this);

        foreach ($methods as $method) {
            if ($method !== __FUNCTION__ && Str::startsWith($method, 'build')) {
                $this->{$method}($builder, $request);
            }
        }

        return $builder;
    }
}
