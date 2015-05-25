<?php

namespace PSaunders88\DiTest\Manager;

use PSaunders88\DiTest\Math\Adder;
use PSaunders88\DiTest\Math\Subtractor;

class Manager
{
    /**
     * Object for managing the addition of numbers
     * 
     * @var Adder
     */
    protected $adder;
    
    /**
     * Object for managing the substraction of numbers
     * 
     * @var Subtractor
     */
    protected $subtractor;
    
    /**
     * Class constructor
     * 
     * @param Adder      $adder
     * @param Subtractor $subtractor
     */
    public function __construct(Adder $adder, Subtractor $subtractor)
    {
        $this->adder = $adder;
        $this->subtractor = $subtractor;
    }
    
    /**
     * Return the result
     * 
     * @param integer|float $x
     * @param integer|float $y
     * 
     * @return integer|float
     */
    public function add($x, $y)
    {
        return $this->adder->compute($x, $y);
    }
    
    /**
     * Return the result
     * 
     * @param integer|float $x
     * @param integer|float $y
     * 
     * @return integer|float
     */
    public function substract($x, $y)
    {
        return $this->subtractor->compute($x, $y);
    }
}
