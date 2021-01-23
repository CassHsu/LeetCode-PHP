<?php
class Solution {
    function fizzBuzz($n) {
        $res = array();
        $im3;
        $im5;
        for ($i = 1; $i <= $n; $i++) {
            $im3 = $i % 3;
            $im5 = $i % 5;
            if ($im3 == 0 && $im5 == 0) {
                array_push($res, "FizzBuzz");
            } else if ($im3 == 0) {
                array_push($res, "Fizz");
            } else if ($im5 == 0) {
                array_push($res, "Buzz");
            } else {
                array_push($res, strval($i));
            }
        }
        return $res;
    }
}