<?php

namespace AsymetricData\Option;

/**
 * @template T
 *
 * @implements \Option<T>
 */
class Some extends Option
{
    public function isSome(): bool
    {
        return true;
    }

    public function isNone(): bool
    {
        return false;
    }

    /**
     * @return T
     */
    public function unwrap(): mixed
    {
        return $this->value;
    }
}