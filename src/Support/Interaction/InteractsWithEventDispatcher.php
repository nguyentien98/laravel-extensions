<?php

/*
 * This file is part of the Xuanquynh Laravel Extensions package.
 *
 * (c) Nguyễn Xuân Quỳnh
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
