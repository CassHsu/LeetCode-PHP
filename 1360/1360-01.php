<?php
class Solution {
    function daysBetweenDates($date1, $date2) {
        $day1 = 60 * 60 * 24;
        $d1 = strtotime($date1);
        $d2 = strtotime($date2);
        
        return abs(($d1 - $d2) / $day1);
    }
}
