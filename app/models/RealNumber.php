<?php

namespace App\Models;

class RealNumber
{
    public const NUMBERS = ['1','2','3','4','5','6','7','8','9','0'];

    public const CONVERT = ['1','2','3','4','5','6','7','8','9','10','50','100'];

    public const CONVERT_END_ZERO = ['10','20','30','40','50','60','70','80','90'];

    private $number;

    /**
     * @param $number
     * @param $convertNumber
     */
    public function __construct(int $number)
    {
        $this->number = $number;
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
    public function setNumber($number)
    {
        $this->number = $number;
    }
}