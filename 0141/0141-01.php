<?php
class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $fast = $head;
        $slow = $head;
        while ($fast != null && $fast->next != null) {
            $fast = $fast->next->next;
            $slow = $slow->next;
            
            if ($fast === $slow) return true;
        }
        return false;
    }
}
