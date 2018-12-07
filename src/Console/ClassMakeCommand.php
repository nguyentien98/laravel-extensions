<?php

namespace XuanQuynh\Laravel\Console;

use Illuminate\Console\GeneratorCommand;

class ClassMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:class';

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
        return __DIR__.'/stubs/class.stub';
    }
}
