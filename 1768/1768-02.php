<?
class Solution {
    function mergeAlternately($word1, $word2) {
        $res = "";
        $w1 = strlen($word1);
        $w2 = strlen($word2);
        $i = 0;

        while ($i < $w1 || $i < $w2) {
            if ($i < $w1) $res .= $word1[$i];
            if ($i < $w2) $res .= $word2[$i];
            $i++;
        }

        return $res;
    }
}
