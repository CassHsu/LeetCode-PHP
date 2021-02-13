<?php
class Solution {
    function groupAnagrams($strs) {
        $ret = [];
        
        foreach ($strs as $s) {
            $t = str_split($s);
            sort($t);
            $k = implode('', $t);
                        
            if (array_key_exists($k, $ret)) {
                $ret[$k][] = $s;
            } else {
                $ret[$k] = [$s];
            }
        }
        return $ret;
    }
}
