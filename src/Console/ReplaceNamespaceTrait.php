<?php

namespace XuanQuynh\Laravel\Console;

trait ReplaceNamespaceTrait
{
    /**
     * Replaces interface name and parent name for given stub
     *
     * @param  string  $stub
     * @param  string  $name
     * @return self
     */
    public function replaceNamespace(&$stub, $name)
    {
        if (!$parent = $this->option('extends')) {
            return parent::replaceNamespace($stub, $name);
        }

        $namespace = $this->getNamespace($name);
        $name = trim(substr($name, strrpos($name, '\\')), '\\');
        $parentName = trim(substr($parent, strrpos($parent, '\\')), '\\');

        $stub = str_replace(
            [
                'DummyNamespace',
                'DummyClass',
                'DummyParentFullName',
                'DummyParentName',
            ],
            [
                $namespace,
                $name,
                $parent,
                $parentName,
            ],
            $stub
        );
        
        return $this;
    }
}
