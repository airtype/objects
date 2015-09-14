<?php

namespace Airtype\Objects\Traits;

trait Accessible
{
    /**
     * Input
     *
     * @var array
     */
    private $input = [];

    /**
     * Get Magic Method
     *
     * @param string $name Name
     *
     * @return mixed Value
     */
    public function __get($name)
    {
        return $this->input[$name];
    }

    /**
     * Isset Magic Method
     *
     * @param string $name Name
     *
     * @return boolean
     */
    public function __isset($name)
    {
        return isset($this->input[$name]);
    }

    /**
     * Offset Exists
     *
     * @param  mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->input[$offset]);
    }

    /**
     * Offset Get
     *
     * @param  mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->input[$offset];
    }

    /**
     * Get Input
     *
     * @return array Input
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * To Array
     *
     * @return array Array of inputs
     */
    public function toArray()
    {
        return $this->input;
    }

    /**
     * Json Serialize
     *
     * @return array Convert the object into something JSON serializable.
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * To Json
     *
     * @return string Json string of inputs
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }
}
