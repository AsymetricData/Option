<?php

namespace AsymetricData\Option;

use AsymetricData\Option\Contracts\Option as ContractsOption;

/**
 * @template T
 *
 * @implements \Option<T>
 */
abstract class Option implements ContractsOption
{
    public function __construct(
        /** @var T */
        protected mixed $value = null){}

    public function unwrapOr(mixed $or) : mixed
    {
        return ($this instanceof None) ? $or : $this->unwrap();
    }

    public function error() : ?string
    {
        if($this->isNone()){
            return $this->value;
        }

        return null;
    }
}