<?php

namespace AsymetricData\Option\Contracts;

/**
 * @template T
 */
interface Option
{
    public function isSome() : bool;
    public function isNone() : bool;
    public function unwrap() : mixed;
    public function unwrapOr(mixed $or) : mixed;
    public function error() : mixed;
}