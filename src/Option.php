<?php

namespace AsymetricData\Option;

use AsymetricData\Option\Contracts\Option as ContractsOption;

/**
 * @template T
 *
 * @implements Contracts\Option<T>
 */
abstract class Option implements ContractsOption
{
    /** @propery T $value */
    
    public function __construct(
        /** @var T */
        protected mixed $value = null){}

    /** 
     * @param T $or
     *  **/  
    public function unwrapOr(mixed $or) : mixed
    {
        return ($this instanceof None) ? $or : $this->unwrap();
    }
    

    public function error() : mixed
    {
        if($this->isNone()){
            return $this->value;
        }

        return null;
    }
}