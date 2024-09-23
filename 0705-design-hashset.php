<?php

/**
 * 705. Design HashSet
 * https://leetcode.com/problems/design-hashset/
 */

class MyHashSet
{
    /**
     * Initialize your data structure here.
     */
    private $data = [];

    function __construct()
    {

    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function add($key)
    {
        $this->data[$key] = true;
        return NULL;
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key)
    {
        unset($this->data[$key]);
        return NULL;
    }

    /**
     * Returns true if this set contains the specified element
     * @param Integer $key
     * @return Boolean
     */
    function contains($key)
    {
        return isset($this->data[$key]);
    }
}

/**
 * Your MyHashSet object will be instantiated and called as such:
 * $obj = MyHashSet();
 * $obj->add($key);
 * $obj->remove($key);
 * $ret_3 = $obj->contains($key);
 */