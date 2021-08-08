<?php
class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return String[]
     */
    function uncommonFromSentences($s1, $s2) {
        return array_keys(
            array_filter(
                array_count_values(
                    array_merge(explode(" ", $s1), explode(" ", $s2))
                ),
                function($v) { return 1 === $v; }
            )
        );
    }
}
