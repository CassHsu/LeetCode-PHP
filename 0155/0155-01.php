<?php
class MinStack {
    /**
     * initialize your data structure here.
     */
    function __construct() {
        $this->stack = array();
        $this->minlist = array();
        $this->cnt = 0;
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->stack, $x);
        if ($this->cnt > 0 && $x > $this->minlist[$this->cnt - 1]) {
            array_push($this->minlist, $this->minlist[$this->cnt - 1]);
        } else {
            array_push($this->minlist, $x);
        }
        $this->cnt++;
    }
  
    /**
     * @return NULL
     */
    function pop() {
        array_pop($this->stack);
        array_pop($this->minlist);
        $this->cnt--;
    }
  
    /**
     * @return Integer
     */
    function top() {
        return $this->stack[$this->cnt - 1];
    }
  
    /**
     * @return Integer
     */
    function getMin() {
        return $this->minlist[$this->cnt - 1];
    }
}
