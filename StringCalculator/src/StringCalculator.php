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
            $arrayChanged = str_replace('\n', ",", $arg);
            $arrayString = explode(',', $arrayChanged);
            $result = $this->sumString($result, $arrayString);
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

}