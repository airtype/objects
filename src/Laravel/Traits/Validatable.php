<?php

namespace Airtype\Objects\Laravel\Traits;

use Illuminate\Contracts\Validation\ValidationException;

trait Validatable
{
    /**
     * Validate
     *
     * @var bool
     */
    protected $validate;

    /**
     * Rules
     *
     * @var array
     */
    public $rules = [];

    /**
     * Messages
     *
     * @var array
     */
    public $messages = [];

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

    /**
     * Validate
     *
     * @throws HttpException
     */
    public function validate()
    {
        $validator = app()
                        ->make('validator')
                        ->make($this->input, $this->rules, $this->messages);

        if ($validator->fails()) {
            throw new ValidationException($validator->errors());
        }
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
        parent::offsetSet($offset, $value);

        if ($this->validate) {
            $this->validate();
        }
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
        parent::offsetUnset($offset);

        if ($this->validate) {
            $this->validate();
        }
    }

    /**
     * To Array
     *
     * @return array Array of validated inputs
     */
    public function toArray()
    {
        return array_only($this->input, array_keys($this->rules));
    }
}
