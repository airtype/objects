<?php

namespace Airtype\Objects;

use ArrayAccess;
use JsonSerializable;
use Airtype\Objects\Traits\Accessible;
use Airtype\Objects\Traits\Immutable;

class ValueObject extends Object implements ArrayAccess, JsonSerializable
{
    use Accessible, Immutable;
}
