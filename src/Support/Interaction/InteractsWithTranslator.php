<?php

/*
 * This file is part of the Sepiphy package.
 *
 * (c) Nguyễn Xuân Quỳnh <nguyenxuanquynh2210vghy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sepiphy\Laravel\Support\Interaction;

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
