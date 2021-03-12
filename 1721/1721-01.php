<?php
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function swapNodes($head, $k) {
        $values = array();
        $curr = $head;
        while ($curr != null) {
            array_push($values, $curr->val);
            $curr = $curr->next;
        }
        
        $il = $k - 1;
        $ir = count($values) - $k;
        $curr = $head;
        $i = 0;
        while ($curr != null) {
            if ($i === $il) $curr->val = $values[$ir];
            if ($i === $ir) $curr->val = $values[$il];
            $i++;
            $curr = $curr->next;
        }
        return $head;
    }
}
