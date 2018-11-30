<?php

namespace XuanQuynh\Laravel\Support\Interaction;

use Illuminate\Contracts\Config\Repository;

trait InteractsWithConfiguration
{
    /**
     * The config implementation.
     *
     * @var Repository
     */
    protected $config;

    /**
     * Get the config implementation.
     *
     * @return Repository
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Set the config implementation.
     *
     * @param  Repository  $config
     * @return $this
     */
    public function setConfig(Repository $config)
    {
        $this->config = $config;

        return $this;
    }
}
