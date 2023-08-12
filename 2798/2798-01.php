<?php
class Solution {
    function numberOfEmployeesWhoMetTarget($hours, $target) {
        $count = 0;

        foreach ($hours as $h) {
            if ($h >= $target) $count++;
        }

        return $count;
    }
}
