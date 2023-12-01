<?php

namespace AsymetricData\Option;

class None extends Option
{
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