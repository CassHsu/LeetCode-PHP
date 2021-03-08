<?php
class Solution {
    function mergeTwoLists($l1, $l2) {
        $head = new ListNode();
        $curr = $head;
        
        while($l1 != NULL or $l2 != NULL){
            if($l1 == NULL){
                $curr->next = new ListNode($l2->val);
                $l2 = $l2->next;
            } elseif ($l2 == NULL){
                $curr->next = new ListNode($l1->val);
                $l1 = $l1->next;
            }
            
            if($l1 != NULL && $l2 != NULL){
                if($l1->val < $l2->val){
                    $curr->next = new ListNode($l1->val);
                    $l1 = $l1->next;
                }else{
                    $curr->next = new ListNode($l2->val);
                    $l2 = $l2->next;            
                }
            }
            $curr = $curr->next;
        }
        return $head->next;
    }
}
