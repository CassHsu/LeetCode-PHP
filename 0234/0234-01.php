<?php
class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome($head) {
        $fast = $head;
        $slow = $head;
        $stack = array();
        
        while ($fast != null && $fast->next != null) {
            array_push($stack, $slow->val);
            $fast = $fast->next->next;
            $slow = $slow->next;
        }
        
        if ($fast != null) $slow = $slow->next;
        
        while ($slow != null) {
            if ($slow->val !== array_pop($stack)) return false;
            $slow = $slow->next;
        }
        return true;
    }
}
