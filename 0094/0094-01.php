<?
class Solution {
    private $ans = [];
    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $this->dfs($root);
        return $this->ans;
    }

    function dfs($node) {
        if ($node != null) {
            $this->dfs($node->left);
            array_push($this->ans, $node->val);
            $this->dfs($node->right);
        }
    }
}
