<?php
class Solution {
    function oddEvenList($head) {
        if ($head === null) return null;
        
        $odd = $head;
        $even = $odd->next;
        $evenHead = $even;
        
        while ($even !== null && $even->next !== null) {
            $odd->next = $even->next;
            $odd = $odd->next;
            $even->next = $odd->next;
            $even = $even->next;
        }
        
        $odd->next = $evenHead;
        return $head;
    }
}
