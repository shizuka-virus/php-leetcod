<?php

/**
 * 933. Number of Recent Calls
 * https://leetcode.com/problems/number-of-recent-calls/
 */

class RecentCounter
{

    private $requests = [];

    function __construct()
    {
    }

    /**
     * @param Integer $t
     * @return Integer
     */
    function ping($t)
    {
        $this->requests[] = $t;
        while ($this->requests[0] < $t - 3000) array_shift($this->requests);
        return count($this->requests);
    }
}

/**
 * Your RecentCounter object will be instantiated and called as such:
 * $obj = RecentCounter();
 * $ret_1 = $obj->ping($t);
 */