class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        $start = 1;
        $end = $n;
        while (true) {
            $mid = floor($start + ($end - $start)/2);
            if ($this->isBadVersion($mid) && !$this->isBadVersion($mid-1)) return $mid;
            if ($this->isBadVersion($mid) == false) {
                $start = $mid + 1;
            } else {
                $end = $mid;
            }
        }
        return 0;
    }
}
