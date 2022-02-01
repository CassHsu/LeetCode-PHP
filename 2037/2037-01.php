<?php
class Solution {
    function minMovesToSeat($seats, $students) {
        $count = 0;
        sort($seats);
        sort($students);
        
        for ($i = 0; $i < count($seats); $i++) {
            $count += abs($seats[$i] - $students[$i]);
        }
        
        return $count;
    }
}
