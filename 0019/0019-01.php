<?php
class Solution {
    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $dummy = new ListNode(-1, $head);
        $fast = $dummy;
        $slow = $dummy;
        
        for ($i = 0; $i < $n; $i++) {
            $fast = $fast->next;
        }
        
        while ($fast->next != null) {
            $fast = $fast->next;
            $slow = $slow->next;
        }
        
        $slow->next = $slow->next->next;
        return $dummy->next;
    }
}
