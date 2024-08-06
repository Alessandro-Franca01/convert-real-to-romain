<?php

namespace App\Services\Impl;

use App\Services\ConvertServiceInterface;
use App\Models\RealNumber;
use App\Models\RomainNumber;

class ConverServiceImplements implements ConvertServiceInterface
{
    /**
     * @param string $number
     * @return bool|null
     */
    public static function checkIsRealNumber(string $number): ?bool
    {
        $realNumbers = RealNumber::NUMBERS;
        $romainNumbers = RomainNumber::TO_REAL;

        $testReal = str_replace($realNumbers, '_real', $_POST['number']);
        $testRomain = str_replace($romainNumbers, '_romain', strtoupper($_POST['number']));

        $hasReal = is_int(strpos($testReal, 'real', 0));
        $hasRomain = is_int(strpos($testRomain, 'romain', 0));

        if ($hasReal == true && $hasRomain == false){
            return true;
        }
        elseif ($hasReal == false && $hasRomain == true){
            $onlyRomain = str_replace('_romain', '', $testRomain);

            if (!empty($onlyRomain)){

                $_SESSION['error'] = 'Campo digitado deve conter somente numeros Romanos!';

                header('Location: ../views/error.php');
            }

            return false;
        }
        elseif ($hasReal == true && $hasRomain == true){
            $_SESSION['error'] = 'Numero digitado não é Real nem Romano';

            header('Location: ../views/error.php');
        }

        $_SESSION['error'] = 'Erro no Sistema!';

        header('Location: ../views/error.php');
    }

    /**
     * @param $number
     * @return RealNumber
     */
    public static function createRealNumber($number): RealNumber
    {
        return new RealNumber($number);
    }

    /**
     * @param $number
     * @return RomainNumber
     */
    public static function createRomainNumber($number): RomainNumber
    {
        return new RomainNumber($number);

    }

    public static function convertRealToRomain($number)
    {
        $strNumber = strval($number);
        $arrNumber = str_split($strNumber);
        $incrementNumber = '';
        $countArrNumber = count($arrNumber);

        // conversão 1 DIGITOS
        if ($countArrNumber == 1){
            $result = str_replace(RealNumber::NUMBERS, RomainNumber::TO_ROMAIN, $strNumber);
            $incrementNumber = $incrementNumber . $result;
        }

        //conversao 2 DIGITOS
        if ($countArrNumber > 1){
//            var_dump(end($number, $arrNumber));die();
            if ($number == 100){
                return 'C';
            }

            if(end($arrNumber) == '0'){ // OK
                $result = str_replace(RealNumber::CONVERT_END_ZERO, RomainNumber::CONVERT_END_ZERO, $strNumber);
                var_dump($result);die();
                return $result;
            }
            foreach ($arrNumber as $key => $unit){
                if ($key == 0){
                    $result = str_replace(RealNumber::NUMBERS, RomainNumber::CONVERT_END_ZERO, $unit);
                }

                if ($key == 1){
                    $result = str_replace(RealNumber::NUMBERS, RomainNumber::TO_ROMAIN, $unit);
                }
                $incrementNumber = $incrementNumber . $result;
            }
        }

        if ($countArrNumber > 2 && $number < 100){

            $_SESSION['error'] = 'Numero acima do permitido!';

            header('Location: ../views/error.php');die();
        }
//        var_dump($incrementNumber);die();
        return $incrementNumber;
    }

    public static function convertRomainToReal($number)
    {
        $arrNumber = str_split(strtoupper($number));
        $incrementNumber = 0;
        $beforeNumber = 11;
        $countArrNumber = count($arrNumber);

        foreach ($arrNumber as $key => $unit){
            $result = str_replace(RomainNumber::TO_ROMAIN, RealNumber::CONVERT, $unit);
            if ($key == 0 && $result == 'C'){
                $incrementNumber = $incrementNumber + $result;
                break;
            }

            if ($key > 0 && $beforeNumber < $result ){
                $incrementValeu = $result - ($beforeNumber + $beforeNumber); // previous number has already been added
                $incrementNumber = $incrementNumber + $incrementValeu;
                continue;
            }

            $beforeNumber = $result;
            $incrementNumber = $incrementNumber + $result;
        }

        return $incrementNumber;
    }
}