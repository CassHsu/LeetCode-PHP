<?php
class Solution {
    /**
     * @param TreeNode $root
     * @return Float[]
     */
    function averageOfLevels($root) {
        $ret = array();
        $q = array();
        array_push($q, $root);
        
        while (count($q) > 0) {
            $size = count($q);
            $sum = 0;
            
            for ($i = 0; $i < $size; $i++) {
                $curr = array_shift($q);
                $sum += $curr->val;
                
                if ($curr->left != null) array_push($q, $curr->left);
                if ($curr->right != null) array_push($q, $curr->right);
            }
            
            array_push($ret, $sum/$size);
        }
        
        return $ret;
    }
}
