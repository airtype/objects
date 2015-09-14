<?php

namespace Airtype\Objects\Laravel;

use Airtype\Objects\Laravel\Traits\Validatable;

class ValueObject extends \Airtype\Objects\ValueObject
{
    use Validatable;

    /**
     * Constructor
     *
     * @param array $input Input
     */
    public function __construct(array $input, $validate = true)
    {
        $this->input     = $input;
        $this->validate  = $validate;

        if ($this->validate) {
            $this->validate();
        }
    }
}
