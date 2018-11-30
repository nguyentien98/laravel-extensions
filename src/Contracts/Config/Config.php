<?php

namespace XuanQuynh\Laravel\Contracts\Config;

use Illuminate\Contracts\Config\Repository;

interface Config extends Repository
{
    /**
     * Merge the given items.
     *
     * @param  array  $items
     * @return $this
     */
    public function merge($items);
}
