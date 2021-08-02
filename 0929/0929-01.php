<?php
class Solution {

    /**
     * @param String[] $emails
     * @return Integer
     */
    function numUniqueEmails($emails) {
        $m = array();
        
        foreach ($emails as $email) {
            $names = explode("@", $email);
            
            $local = explode("+", $names[0])[0];
            $local = str_replace(".", "", $local);
            
            $k = $local . "@" . $names[1];
            if (!$m[$k]) {
                $m[$k] = 1;
            }
        }
        
        return count($m);
    }
}
