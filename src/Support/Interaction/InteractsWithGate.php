<?php

namespace XuanQuynh\Laravel\Support\Interaction;

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
