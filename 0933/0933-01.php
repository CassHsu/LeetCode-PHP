<?php
class RecentCounter {
    var $requests;
    function __construct() {
        $this->requests = array();
    }
    
    function ping($t) {
        array_push($this->requests, $t);
        $l = $t - 3000;
        while ($this->requests[0] < $l) {
            array_shift($this->requests);
        }
        return count($this->requests);
    }
}