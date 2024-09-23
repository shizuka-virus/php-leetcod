<?php

/**
 * 703. Kth Largest Element in a Stream
 * https://leetcode.com/problems/kth-largest-element-in-a-stream/
 */

class KthLargest
{

    private $nums = [];
    private $k = 0;

    /**
     * @param Integer   $k
     * @param Integer[] $nums
     */
    function __construct($k, $nums)
    {
        sort($nums);
        $this->k = $k;
        while ($k-- && !empty($nums)) $this->nums[] = array_pop($nums);
    }

    /**
     * @param Integer $val
     * @return Integer
     */
    function add($val)
    {
        $this->nums[] = $val;

        $i = count($this->nums) - 1;
        while ($i && $this->nums[$i] > $this->nums[$i - 1]) {
            $tmp = $this->nums[$i - 1];
            $this->nums[$i - 1] = $this->nums[$i];
            $this->nums[$i] = $tmp;
            $i--;
        }

        if (count($this->nums) > $this->k) array_pop($this->nums);
        return $this->nums[$this->k - 1];
    }
}

class KthLargest2 {

    private SplMinHeap $heap;
    private $k = 0;

    /**
     * @param Integer $k
     * @param Integer[] $nums
     */
    function __construct($k, $nums) {
        $this->k = $k;
        $this->heap = new SplMinHeap();

        foreach($nums as $num) $this->heap->insert($num);

        while($this->heap->count() > $k) $this->heap->extract();
    }

    /**
     * @param Integer $val
     * @return Integer
     */
    function add($val) {
        $this->heap->insert($val);

        if($this->heap->count() > $this->k) $this->heap->extract();

        return $this->heap->current();
    }
}
