<?php

namespace AsymetricData\Option\Contracts;

/**
 * @template T
 */
interface Option
{
    public function isSome() : bool;
    public function isNone() : bool;
    
    /** 
     * @return T
     *  **/ 
    public function unwrap() : mixed;

    /** 
     * @param T $or
     * @return T
     *  **/ 
    public function unwrapOr(mixed $or) : mixed;
    public function error() : mixed;
}