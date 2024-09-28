<?php

/**
 * 1396. Design Underground System
 * https://leetcode.com/problems/design-underground-system/
 */

class UndergroundSystem
{

    private $ins = [];
    private $travels = [];

    /**
     */
    function __construct()
    {

    }

    /**
     * @param Integer $id
     * @param String  $stationName
     * @param Integer $t
     * @return NULL
     */
    function checkIn($id, $stationName, $t)
    {
        $this->ins[$id] = ['stationName' => $stationName, 't' => $t];
    }

    /**
     * @param Integer $id
     * @param String  $stationName
     * @param Integer $t
     * @return NULL
     */
    function checkOut($id, $stationName, $t)
    {
        if (isset($this->ins[$id])) {
            $stationFrom = $this->ins[$id]['stationName'];
            $time = $t - $this->ins[$id]['t'];
            if (!isset($this->travels[$stationFrom][$stationName])) {
                $this->travels[$stationFrom][$stationName] = [];
            }
            $this->travels[$stationFrom][$stationName][] = $time;
        }
    }

    /**
     * @param String $startStation
     * @param String $endStation
     * @return Float
     */
    function getAverageTime($startStation, $endStation)
    {
        if (!isset($this->travels[$startStation][$endStation])) return 0;
        return array_sum($this->travels[$startStation][$endStation]) / count($this->travels[$startStation][$endStation]);
    }
}

/**
 * Your UndergroundSystem object will be instantiated and called as such:
 * $obj = UndergroundSystem();
 * $obj->checkIn($id, $stationName, $t);
 * $obj->checkOut($id, $stationName, $t);
 * $ret_3 = $obj->getAverageTime($startStation, $endStation);
 */