<?php
class Solution {
    /**
     * @param TreeNode $root
     * @return Float[]
     */
    function averageOfLevels($root) {
        $sums = array();
        $counts =array();
        
        $this->dfs($root, 0, $sums, $counts);
        for ($i = 0; $i < count($sums); $i++) {
            $sums[$i] = $sums[$i] / $counts[$i];
        }
        
        return $sums;
    }
    
    function dfs($n, $i, &$sums, &$counts) {
        if ($n == null) return;
        
        if ($i < count($sums)) {
            $sums[$i] += $n->val;
            $counts[$i]++;
            
        } else {
            array_push($sums, $n->val);
            array_push($counts, 1);
        }
        
        $this->dfs($n->left, $i+1, $sums, $counts);
        $this->dfs($n->right, $i+1, $sums, $counts);
    }
}
