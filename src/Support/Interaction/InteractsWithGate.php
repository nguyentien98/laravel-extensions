<?php

/*
 * This file is part of the Sericode package.
 *
 * (c) Nguyễn Xuân Quỳnh <nguyen.xuan.quynh@sericode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sericode\Laravel\Support\Interaction;

use Illuminate\Contracts\Auth\Access\Gate;

trait InteractsWithGate
{
    /**
     * The gate implementation.
     *
     * @var Gate
     */
    protected $gate;

    /**
     * Get the gate implementation.
     *
     * @return Gate
     */
    public function getGate()
    {
        return $this->app;
    }

    /**
     * Set the gate implementation.
     *
     * @param  Gate  $gate
     * @return $this
     */
    public function setGate(Gate $gate)
    {
        $this->gate = $gate;

        return $this;
    }
}
