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
