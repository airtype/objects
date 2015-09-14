<?php

namespace Airtype\Objects\Traits;

trait Mutable
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
        $this->input[$name] = $value;
    }

    /**
     * Unset Magic Method
     *
     * @param string $name Name
     */
    public function __unset($name)
    {
        unset($this->input[$name]);
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
        $this->input[$offset] = $value;
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
        unset($this->input[$offset]);
    }
}
