<?php
class Solution {
    function truncateSentence($s, $k) {
        return join(" ", array_slice(explode(" ", $s), 0, $k));
    }
}
