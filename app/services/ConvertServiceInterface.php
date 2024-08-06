<?php

namespace App\Services;

use App\Models\RealNumber;
use App\Models\RomainNumber;

interface ConvertServiceInterface
{
    /**
     * @param string $number
     * @return bool|null
     */
    public static function checkIsRealNumber(string $number): ?bool;

    /**
     * @param $number
     * @return RealNumber|null
     */
    public static function createRealNumber($number): ?RealNumber;

    /**
     * @param $number
     * @return RomainNumber|null
     */
    public static function createRomainNumber($number): ?RomainNumber;

    public static function convertRealToRomain($number);
}