<?php

namespace Airtype\Objects;

class Object
{
    /**
     * Constructor
     *
     * @param array $input Input
     */
    public function __construct(array $input)
    {
        $this->input = $input;
    }
}
