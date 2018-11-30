<?php

namespace XuanQuynh\Laravel\Support\Interaction;

use Illuminate\Http\Request;

trait InteractsWithRequest
{
    /**
     * The request instance.
     *
     * @var Request
     */
    protected $request;

    /**
     * Get the request instance.
     *
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set the request instance.
     *
     * @param  Request  $request
     * @return $this
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;

        return $this;
    }
}
