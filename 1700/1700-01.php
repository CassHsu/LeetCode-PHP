<?php
class Solution {
    function countStudents($students, $sandwiches) {
        if (array_count_values($students)['1'] == array_count_values($sandwiches)['1']) return 0;
        
        while (count($sandwiches) > 0) {
            if ($this->countIt($students, $sandwiches[0]) === 0) {
                break;
            }
            $stud = array_shift($students);
            if ($stud === $sandwiches[0]) {
                array_shift($sandwiches);
            } else {
                array_push($students, $stud);
            }
        }        
        return count($students);
    }
    
    function countIt($arr, $target) {
        $count = 0;
        foreach ($arr as $a) {
            if ($a === $target) $count++;
        }
        return $count;
    }
}