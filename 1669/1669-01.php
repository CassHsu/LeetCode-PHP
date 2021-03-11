<?php
class Solution {

    /**
     * @param ListNode $list1
     * @param Integer $a
     * @param Integer $b
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeInBetween($list1, $a, $b, $list2) {
        $start = $list1;
        for ($i = 1; $i < $a; $i++) {
            $start = $start->next;
        }
        
        $end = $start;
        for ($i = $a; $i <= $b; $i++) {
            $end = $end->next;
        }
        
        $start->next = $list2;
        while ($start->next != null) {
            $start = $start->next;
        }
        
        $start->next = $end->next;
        return $list1;
    }
}
