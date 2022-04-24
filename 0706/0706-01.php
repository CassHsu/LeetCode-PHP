<?php
class MyHashMap {
    var $buckets = array();
    function __construct() {
        for ($i = 0; $i < 1000001; $i++) {
            array_push($this->buckets, -1);
        }
    }
  
    function put($key, $value) {
        $this->buckets[$key] = $value;
    }
  
    function get($key) {
        return $this->buckets[$key];
    }
  
    function remove($key) {
        $this->buckets[$key] = -1;
    }
}
