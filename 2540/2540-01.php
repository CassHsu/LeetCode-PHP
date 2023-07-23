<?
class Solution {
    function getCommon($nums1, $nums2) {
        $i = 0; $j = 0;
        $n = count($nums1); $m = count($nums2);

        while ($i < $n && $j < $m) {
            if ($nums1[$i] < $nums2[$j])  $i++;
            else if ($nums1[$i] > $nums2[$j]) $j++;
            else return $nums1[$i];
        }

        return -1;
    }
}
