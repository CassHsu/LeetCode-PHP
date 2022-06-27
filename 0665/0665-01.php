<?php
class Solution {
    function checkPossibility($nums) {
        $changed = false;
        
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] >= $nums[$i - 1]) continue;
            if ($changed) return false;
            
            if ($i === 1 || $nums[$i] >= $nums[$i - 2]) $nums[$i - 1] = $nums[$i];
            else $nums[$i] = $nums[$i - 1];
            
            $changed = true;
        }
        
        return true;
    }
}
