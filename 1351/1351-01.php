<?php
class Solution {
    function countNegatives($grid) {
        $count = 0;

        foreach ($grid as $row) {
            foreach ($row as $n) {
                if ($n < 0) $count++;
            }
        }

        return $count;
    }
}
