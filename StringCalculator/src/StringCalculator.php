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
            $arrayString = explode(',', $arg);
            $result = $this->sum($result, $arrayString);
        }
        return $result;
    }

    private function sum($result, array $arrayString)
    {
        foreach ($arrayString as $value) {
            $result += $value;
        }
        return $result;
    }

}