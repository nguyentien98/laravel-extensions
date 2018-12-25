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

class ClassMakeCommand extends GeneratorCommand
{
    use ReplaceNamespaceTrait;
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:class
                            {name : The class name}
                            {--extends= : The class parent}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new class';

    /**
     * The type of element being generated.
     *
     * @var string
     */
    protected $type = 'Class';

    /**
     * {@inheritdoc}
     */
    protected function getStub()
    {
        if ($this->option('extends')) {
            return __DIR__.'/stubs/class.parent.stub';
        }
        
        return __DIR__.'/stubs/class.stub';
    }
}
