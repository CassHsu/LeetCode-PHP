<?php
class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        $ite = $head;
        while ($ite != null) {
            $tmp = $ite->next;
            while ($tmp != null && $tmp->val == $ite->val) {
                $tmp = $tmp->next;
            }
            
            $ite->next = $tmp;
            $ite = $ite->next;
        }
        return $head;
    }
}
