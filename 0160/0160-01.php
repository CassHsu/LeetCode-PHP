<?php
class Solution {
    /**
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    function getIntersectionNode($headA, $headB) {
        if ($headA == null || $headB == null) return null;
        
        $a = $headA;
        $b = $headB;
        while ($a !== $b) {
            $a = ($a !== null) ? $a->next : $headB;
            $b = ($b !== null) ? $b->next : $headA;
        }
        return $a;
    }
}
