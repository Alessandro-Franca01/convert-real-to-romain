<?php

namespace App\Models;

class RomainNumber
{
    public const TO_REAL = ['I','V','X','L','C','D','M'];

    public const TO_ROMAIN = ['I','II','III','IV','V','VI','VII','VIII','IX','X','L','C'];

    public const CONVERT_END_ZERO = ['X','XX','XXX','XL','L','LX','LXX','LXXX','XC','C'];



    private $number;

    /**
     * @param $number
     */
    public function __construct($number)
    {
        $this->number = strtoupper($number);
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }

}