<?php

namespace AsymetricData\Option;

/**
 * @template T
 *
 * @extends Option<T>
 */
class None extends Option
{
    /** @propery T $value */
    
    public function isSome(): bool
    {
        return false;
    }

    public function isNone(): bool
    {
        return true;
    }

    public function unwrap(): mixed
    {
        throw new \RuntimeException("Can't `unwrap()` on `None`");
    }
}