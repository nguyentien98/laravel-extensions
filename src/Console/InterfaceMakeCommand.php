<?php

/*
 * This file is part of the Xuanquynh Laravel Extensions package.
 *
 * (c) Nguyễn Xuân Quỳnh
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XuanQuynh\Laravel\Console;

use Illuminate\Console\GeneratorCommand;
use XuanQuynh\Laravel\Console\ReplaceNamespaceTrait;

class InterfaceMakeCommand extends GeneratorCommand
{
    use ReplaceNamespaceTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:interface
                            {name : The interface name}
                            {--extends= : The interface parent}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new interface';

    /**
     * The type of element being generated.
     *
     * @var string
     */
    protected $type = 'Interface';

    /**
     * {@inheritdoc}
     */
    protected function getStub()
    {
        if ($this->option('extends')) {
            return __DIR__.'/stubs/interface.parent.stub';
        }

        return __DIR__.'/stubs/interface.stub';
    }
}
