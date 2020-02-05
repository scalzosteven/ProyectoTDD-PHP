<?php

namespace Refactoring;
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
        return array_filter($arrayString);
    }

}