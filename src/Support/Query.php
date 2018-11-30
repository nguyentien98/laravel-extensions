<?php

namespace XuanQuynh\Laravel\Support;

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