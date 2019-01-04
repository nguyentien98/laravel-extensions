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

use Illuminate\Contracts\Foundation\Application;

trait InteractsWithApplication
{
    /**
     * The application implementation.
     *
     * @var Application
     */
    protected $app;

    /**
     * Get the application implementation.
     *
     * @return Application
     */
    public function getApplication()
    {
        return $this->app;
    }

    /**
     * Set the application implementation.
     *
     * @param  Application  $app
     * @return $this
     */
    public function setApplication(Application $app)
    {
        $this->app = $app;

        return $this;
    }
}
