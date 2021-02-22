class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $ret = "";
        $s1 = strlen($word1);
        $s2 = strlen($word2);
        $w1 = $s1;
        $w2 = $s2;
        $i = 0;
        
        while ($w1 > 0 && $w2 > 0) {
            $ret .= $word1[$i];
            $ret .= $word2[$i];
            $i++;
            $w1--;
            $w2--;
        }
        
        if ($w1 > 0) {
            while ($i < $s1) {
                $ret .= $word1[$i];
                $i++;
            }
        } else {
            while ($i < $s2) {
                $ret .= $word2[$i];
                $i++;
            }
        }
        
        return $ret;
    }
}
