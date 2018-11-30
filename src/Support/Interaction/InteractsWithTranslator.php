<?php

namespace XuanQuynh\Laravel\Support\Interaction;

use Illuminate\Contracts\Translation\Translator;

trait InteractsWithTranslator
{
    /**
     * The translator implementation.
     *
     * @var Translator
     */
    protected $translator;

    /**
     * Get the translator implementation.
     *
     * @return Translator
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * Set the translator implementation.
     *
     * @param  Translator  $translator
     * @return $this
     */
    public function setTranslator(Translator $translator)
    {
        $this->translator = $translator;

        return $this;
    }
}
