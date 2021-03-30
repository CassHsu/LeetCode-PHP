<?php
class Solution {
    /**
     * @param ListNode $head
     * @return Integer
     */
    function getDecimalValue($head) {
        $num = $head->val;
        while ($head->next !== null) {
            $num = $num << 1 | $head->next->val;
            $head = $head->next;
        }
        return $num;
    }
}
