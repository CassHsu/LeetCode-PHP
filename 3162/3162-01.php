<?
class Solution {
    function numberOfPairs($nums1, $nums2, $k) {
        $count = 0;

        for ($i = 0; $i < count($nums1); $i++) {
            for ($j = 0; $j < count($nums2); $j++) {
                if ($nums1[$i] % ($nums2[$j] * $k) === 0) {
                    $count++;
                }
            }
        }

        return $count;
    }
}
