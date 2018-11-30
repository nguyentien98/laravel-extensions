<?php

namespace XuanQuynh\Laravel\Support\Interaction;

use Illuminate\Contracts\View\Factory as ViewFactory;

trait InteractsWithViewFactory
{
    /**
     * The view factory implementation
     *
     * @var Factory
     */
    protected $views;

    /**
     * Get the view factory implementation.
     *
     * @return Factory
     */
    public function getViewFactory()
    {
        return $this->views;
    }

    /**
     * Set the view factory implementation.
     *
     * @param  Factory  $views
     * @return $this
     */
    public function setViewFactory(ViewFactory $views)
    {
        $this->views = $views;

        return $this;
    }
}
