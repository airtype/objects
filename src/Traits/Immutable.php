<?php

namespace Airtype\Objects\Traits;

trait Immutable
{
    /**
     * Input
     *
     * @var array
     */
    private $input = [];

    /**
     * Set Magic Method
     *
     * @param string $name  Name
     * @param mixed  $value Value
     */
    public function __set($name, $value)
    {
        return;
    }

    /**
     * Unset Magic Method
     *
     * @param string $name Name
     */
    public function __unset($name)
    {
        return;
    }

    /**
     * Offset Set
     *
     * @param  mixed $offset
     * @param  mixed $value
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        return;
    }

    /**
     * Offset Unset
     *
     * @param  mixed $offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        return;
    }
}
