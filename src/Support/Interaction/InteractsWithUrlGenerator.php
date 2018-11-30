<?php

namespace XuanQuynh\Laravel\Support\Interaction;

use Illuminate\Contracts\Routing\UrlGenerator;

trait InteractsWithUrlGenerator
{
    /**
     * The url generator implementation.
     *
     * @var UrlGenerator
     */
    protected $url;

    /**
     * Get the url generator implementation.
     *
     * @return UrlGenerator
     */
    public function getUrlGenerator()
    {
        return $this->url;
    }

    /**
     * Set the url generator implementation.
     *
     * @param  UrlGenerator  $url
     * @return $this
     */
    public function setUrlGenerator(UrlGenerator $url)
    {
        $this->url = $url;

        return $this;
    }
}
