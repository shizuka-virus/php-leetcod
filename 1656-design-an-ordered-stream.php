<?php

/**
 * 1656. Design an Ordered Stream
 * https://leetcode.com/problems/design-an-ordered-stream/
 */

class OrderedStream
{

    private $stream = [];
    private $ptr = 1;

    /**
     * @param Integer $n
     */
    function __construct($n)
    {
        $this->stream = array_fill(1, $n + 1, false);
    }

    /**
     * @param Integer $id
     * @param String  $value
     * @return String[]
     */
    function insert($id, $value)
    {
        $this->stream[$id] = $value;
        $result = [];
        while ($this->stream[$this->ptr] != false) $result[] = $this->stream[$this->ptr++];
        return $result;
    }
}

/**
 * Your OrderedStream object will be instantiated and called as such:
 * $obj = OrderedStream($n);
 * $ret_1 = $obj->insert($id, $value);
 */