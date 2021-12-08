<?php
class Solution {
    function arraysIntersection($arr1, $arr2, $arr3) {
        $p1 = $p2 = $p3 = 0;
        $ans = array();
        
        while ($p1 < count($arr1) && $p2 < count($arr2) && $p3 < count($arr3)) {
            if ($arr1[$p1] === $arr2[$p2] && $arr2[$p2] === $arr3[$p3]) {
                array_push($ans, $arr1[$p1]);
                $p1++;
                $p2++;
                $p3++;
                
            } else {
                if ($arr1[$p1] < $arr2[$p2]) {
                    $p1++;
                } else if ($arr2[$p2] < $arr3[$p3]) {
                    $p2++;
                } else {
                    $p3++;
                }
            }
        }
        
        return $ans;
    }
}
