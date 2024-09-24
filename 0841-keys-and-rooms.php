<?php

/**
 * 841. Keys and Rooms
 * https://leetcode.com/problems/keys-and-rooms/
 */

class Solution
{
    /**
     * @param Integer[][] $rooms
     * @return Boolean
     */
    function canVisitAllRooms($rooms)
    {
        $stack = $rooms[0];
        $opened = [0 => true];
        while (!empty($stack)) {
            $key = array_pop($stack);
            $opened[$key] = true;
            foreach ($rooms[$key] as $newkey)
                if (!isset($opened[$newkey]))
                    $stack[] = $newkey;
        }
        return count($rooms) == count($opened);
    }
}