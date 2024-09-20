<?php

/**
 * 284. Peeking Iterator
 * https://leetcode.com/problems/peeking-iterator/
 */

// PHP ArrayIterator reference:
// https://www.php.net/arrayiterator

class PeekingIterator
{

    private $it = null;

    /**
     * @param ArrayIterator $arr
     */
    function __construct($arr)
    {
        $this->it = $arr;
    }

    /**
     * @return Integer
     */
    function next()
    {
        $current = $this->it->current();
        $this->it->next();
        return $current;
    }

    /**
     * @return Integer
     */
    function peek()
    {
        return $this->it->current();
    }

    /**
     * @return Boolean
     */
    function hasNext()
    {
        return $this->it->valid();
    }
}

/**
 * Your PeekingIterator object will be instantiated and called as such:
 * $obj = PeekingIterator($arr);
 * $ret_1 = $obj->next();
 * $ret_2 = $obj->peek();
 * $ret_3 = $obj->hasNext();
 */