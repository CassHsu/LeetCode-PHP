<?php
class Solution {
    /**
     * @param String[][] $items
     * @param String $ruleKey
     * @param String $ruleValue
     * @return Integer
     */
    function countMatches($items, $ruleKey, $ruleValue) {
        $m = array("type" => 0, "color" => 1, "name" => 2);
        $count = 0;
        foreach ($items as $item) {
            if ($item[$m[$ruleKey]] === $ruleValue) {
                $count++;
            }
        }
        return $count;
    }
}
