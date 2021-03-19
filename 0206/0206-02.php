<?php
class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        if ($head == null || $head->next == null) return $head;
        
        $rlh = $this->reverseList($head->next);
        $head->next->next = $head;
        $head->next = null;
        return $rlh;
    }
}
