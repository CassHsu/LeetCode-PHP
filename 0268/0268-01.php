<?
class Solution {
    function missingNumber($nums) {
        $missing = count($nums);
        
        for ($i = 0; $i < count($nums); $i++) {
            $missing ^= ($i ^ $nums[$i]);
        }
        
        return $missing;
    }
}
