<?php

namespace Refactoring;
class StringCalculator
{
    public function stringCalculator($arg){
        $result = 0;
        if($arg){
            $arrayString = explode(',', $arg);
            foreach($arrayString as $value) {
                $result += $value;
            }
        }
        return $result;
    }

}