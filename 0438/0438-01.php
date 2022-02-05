<?php
class Solution {
    function findAnagrams($s, $p) {
        $ans = array();
        $pn = strlen($p);
        $sn = strlen($s);
        
        if ($sn < $pn) return $ans;
        
        $pa = array();
        $pb = array();
        
        for ($i = 0; $i < 26; $i++) {
            $pa[$i] = 0;
            $sa[$i] = 0;
        }
        
        $a = ord('a');
        for ($i = 0; $i < $pn; $i++) {
            $pa[ord($p[$i]) - $a] += 1;
        }
        
        for ($i = 0; $i < $sn; $i++) {
            $sa[ord($s[$i]) - $a] += 1;
            
            if ($i >= $pn) {
                $sa[ord($s[$i - $pn]) - $a] -= 1;
            }
            
            if ($this->isEqual($pa, $sa)) array_push($ans, $i - $pn + 1);
        }
        
        return $ans;
    }
    
    function isEqual($pa, $sa) {
        for ($i = 0; $i < 26; $i++) {
            if ($pa[$i] !== $sa[$i]) return false;
        }
        
        return true;
    }
}
