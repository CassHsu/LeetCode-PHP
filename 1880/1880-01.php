<?php
class Solution {

    /**
     * @param String $firstWord
     * @param String $secondWord
     * @param String $targetWord
     * @return Boolean
     */
    function isSumEqual($firstWord, $secondWord, $targetWord) {
        $firstNum = intval($this->getNumStr($firstWord));
        $secondNum = intval($this->getNumStr($secondWord));
        $targetNum = intval($this->getNumStr($targetWord));
        
        return $firstNum + $secondNum === $targetNum;
    }
    
    function getNumStr($word) {
        $ls = str_split($word);
        foreach ($ls as $i => $c) {
            $ls[$i] = strval(ord($c) - 97);
        }
        
        return implode("", $ls);
    }
}
