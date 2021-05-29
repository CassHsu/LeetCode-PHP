class Solution {
    function rotateString($s, $goal) {
        if ($s === "" && $goal === "") return true;
        return strlen($s) === strlen($goal) && strpos($s . $s, $goal);
    }
}
