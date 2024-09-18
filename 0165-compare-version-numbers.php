<?php

/**
 * 165. Compare Version Numbers
 * https://leetcode.com/problems/compare-version-numbers/
 */

class Solution
{
    /**
     * @param String $version1
     * @param String $version2
     * @return Integer
     */

    function compareVersion($version1, $version2)
    {
        $va1 = explode('.', $version1);
        $va2 = explode('.', $version2);

        $i = 0;

        while (isset($va1[$i]) || isset($va2[$i])) {
            if (isset($va1[$i]) && isset($va2[$i])) {
                if ((int)$va1[$i] > (int)$va2[$i]) return 1;
                if ((int)$va1[$i] < (int)$va2[$i]) return -1;
            }
            if (!isset($va2[$i]) && (int)$va1[$i]) return 1;
            if (!isset($va1[$i]) && (int)$va2[$i]) return -1;
            $i++;
        }

        return 0;
    }
}