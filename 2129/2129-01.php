<?php
class Solution {
    function capitalizeTitle($title) {
        $title = strtolower($title);
        $arr = explode(' ', $title);
        foreach ($arr as $k => $v) {
            if(strlen($v) > 2) {
                $arr[$k] = ucfirst($v);
            }
        }
        $ans = implode(' ', $arr);
        return $ans;
    }
}
