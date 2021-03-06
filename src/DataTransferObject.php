<?php

namespace Airtype\Objects;

use ArrayAccess;
use JsonSerializable;
use Airtype\Objects\Traits\Accessible;
use Airtype\Objects\Traits\Mutable;

class DataTransferObject extends Object implements ArrayAccess, JsonSerializable
{
    use Accessible, Mutable;
}
