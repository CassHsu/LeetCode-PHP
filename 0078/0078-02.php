class Solution {
    var $ret;
    function backtrack($nums, $curr, $i) {
        if ($i >= count($nums)) {
            array_push($this->ret, $curr);
            return;
        }
        
        array_push($curr, $nums[$i]);
        $this->backtrack($nums, $curr, $i + 1);
        
        array_pop($curr);
        $this->backtrack($nums, $curr, $i + 1);
        return;
    }
    
    function subsets($nums) {
        $this->ret = array();
        $curr = array();
        $this->backtrack($nums, $curr, 0);
        return $this->ret;
    }
}
