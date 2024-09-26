<?php

/**
 * 1108. Defanging an IP Address
 * https://leetcode.com/problems/defanging-an-ip-address/
 */

class Solution
{
    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address)
    {
        return str_replace(".", "[.]", $address);
    }
}