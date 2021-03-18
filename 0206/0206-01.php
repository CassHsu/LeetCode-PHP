<?php
class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        if ($head == null || $head->next == null) return $head;
        
        $curr = $head;
        $prev = null;
        $next = null;
        while ($curr != null) {
            $next = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $next;
        }
        return $prev;
    }
}
