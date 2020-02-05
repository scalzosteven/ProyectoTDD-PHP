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
            foreach ($arrayString as $value) {
                $result += $value;
            }
        }
        return $result;
    }

}