<?php
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function swapNodes($head, $k) {
        $curr = $head;
        $n1 = null;
        $n2 = null;
        
        while ($curr != null) {
            $k--;
            if ($n2 != null) {
                $n2 = $n2->next;
            }
            if ($k === 0) {
                $n1 = $curr;
                $n2 = $head;
            }
            $curr = $curr->next;
        }
        
        $tmp = $n1->val;
        $n1->val = $n2->val;
        $n2->val = $tmp;
        
        return $head;
    }
}
