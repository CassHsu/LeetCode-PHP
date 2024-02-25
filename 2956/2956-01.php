<?
class Solution {
    function findIntersectionValues($nums1, $nums2) {
        $m = [];
        $c1 = 0;
        $c2 = 0;

        for ($i = 0; $i < count($nums1); $i++) {
            if (isset($m[$nums1[$i]])) {
                $m[$nums1[$i]] += 1;
            } else {
                $m[$nums1[$i]] = 1;
            }
        }

        for ($i = 0; $i < count($nums2); $i++) {
            if (isset($m[$nums2[$i]])) {
                $c1 += $m[$nums2[$i]];
                $m[$nums2[$i]] = 0;
                $c2++;
            }
        }

        return [$c1, $c2];
    }
}
