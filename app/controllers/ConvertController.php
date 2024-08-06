<?php

namespace App\Controllers;

use App\Models\RealNumber;
use App\Services\Impl\ConverServiceImplements;

class ConvertController
{
    public function __construct()
    {
    }

    /**
     * @return ConvertController|null
     */
    public static function create(): ?ConvertController
    {
        return new ConvertController();
    }

    public function check($data): bool
    {
        if (empty($data)){
            $_SESSION['error'] = 'Zero não pode ser convertido';

            header('Location: ../views/error.php');die();
        }

        return ConverServiceImplements::checkIsRealNumber($data);
    }

    public function instanceNumber($isReal, $number)
    {
        if ($isReal){
            return ConverServiceImplements::createRealNumber($number);
        }

        return ConverServiceImplements::createRomainNumber($number);
    }

    public function convertNumber($objectNumber)
    {
        if ($objectNumber instanceof RealNumber){
            $_SESSION['convertTypeResult'] = 'Romano';

            return ConverServiceImplements::convertRealToRomain($objectNumber->getNumber());
        }

        return ConverServiceImplements::convertRomainToReal($objectNumber->getNumber());

    }
}