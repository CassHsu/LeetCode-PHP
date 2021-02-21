<?php
class LRUCache {
    /**
     * @param Integer $capacity
     */
    function __construct($capacity) {
        $this->capacity = $capacity;
        $this->arr = array();
    }
  
    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        $value = $this->arr[$key] ?? -1;
        
        if ($value !== -1) {
            unset($this->map[$key]);
            $this->arr = array($key => $value) + $this->arr;
        }
        return $value;
    }
  
    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        if (array_key_exists($key, $this->arr)) {
            $this->arr[$key] = $value;
            $this->get($key);
            return null;
        }
        
        if ((count($this->arr)) == $this->capacity) {
            array_pop($this->arr);
        }
        $this->arr = array($key => $value) + $this->arr;
        return null;
    }
}
