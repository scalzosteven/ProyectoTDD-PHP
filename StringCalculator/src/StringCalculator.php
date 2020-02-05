<?php

namespace Refactoring;
use Exception;

class StringCalculator
{
    public function stringCalculator($arg){
        $result = 0;
        $result = $this->ifNotEmptyString($arg, $result);
        return $result;
    }


    private function ifNotEmptyString($arg, $result)
    {
        if ($arg) {
            $arrayCleaned = $this->CleanArray($arg);
            $result = $this->sumString($result, $arrayCleaned);
        }
        return $result;
    }

    private function sumString($result, array $arrayString)
    {
        foreach ($arrayString as $value) {
            $result += $value;
        }
        return $result;
    }

    private function CleanArray($arg)
    {
        $arrayChanged = str_replace('\n', ",", $arg);
        $arrayChanged = str_replace('//', ",", $arrayChanged);
        $arrayChanged = str_replace(';', ",", $arrayChanged);
        $arrayString = explode(',', $arrayChanged);

        $arrayNegative =  array_filter($arrayString, function($k) {
            return $k < 0;
        });
        if($arrayNegative){
            try {
                try {
                    throw new Exception('negatives not allowed'. $this->showNegativeNumber($arrayNegative));
                } catch (MiExcepción $e) {
                    throw $e;
                }
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }

        }
        $arrayString = array_filter($arrayString, function($k) {
            return $k >= 0;
        });

        return array_filter($arrayString);
    }

    private function showNegativeNumber($numbers){
        foreach ($numbers as $number){
            echo ', ' . $number;
        }
    }


}