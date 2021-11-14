<?php
class Solution {
    function smallestEqual($nums) {
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == $i % 10) return $i;
        }
        return -1;
    }
}
