<?php
class Solution {
    function search($nums, $target) {
        $start = 0;
        $end = count($nums) - 1;
        $mid = 0;
        
        while ($start <= $end) {
            if ($nums[$start] === $target) return $start;
            if ($nums[$end] === $target) return $end;
            
            $mid = floor(($start + $end) / 2);
            if ($nums[$mid] === $target) return $mid;
            
            if ($target > $nums[$start] && $nums[$mid] > $target) {
                $end = $mid - 1;
            } else if ($target > $nums[$mid] && $nums[$end] > $target) {
                $start = $mid + 1;
            } else if ($nums[$mid] > $nums[$end]) {
                $start = $mid + 1;
            } else {
                $end = $mid - 1;
            }
        }
        return -1;
    }
}