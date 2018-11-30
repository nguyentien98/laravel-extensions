<?php

namespace XuanQuynh\Laravel\Support\Interaction;

use Illuminate\Contracts\Events\Dispatcher;

trait InteractsWithEventDispatcher
{
    /**
     * The event dispatcher implementation.
     *
     * @var Dispatcher
     */
    protected $events;

    /**
     * Get the event dispatcher implementation.
     *
     * @return Dispatcher
     */
    public function getEventDispatcher()
    {
        return $this->events;
    }

    /**
     * Set the event dispatcher implementation.
     *
     * @param  Dispatcher  $events
     * @return $this
     */
    public function setEventDispatcher(Dispatcher $events)
    {
        $this->events = $events;

        return $this;
    }
}
