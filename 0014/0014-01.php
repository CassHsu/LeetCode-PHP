<?php
class Solution {
    function longestCommonPrefix($strs) {
        $size = count($strs);
        if ($size == 0) return "";
        if ($size == 1) return $strs[0];
        
        if ($strs[0] === "") return "";
        $prefix = $strs[0];
        
        for ($i = 1; $i < $size; $i++) {
            if ($strs[$i] === "") return "";
            
            while (strpos($strs[$i], $prefix) !== 0) {
                $prefix = substr($prefix, 0, strlen($prefix) - 1);
                if ($prefix === "") return "";
            }
        }
        return $prefix;
    }
}