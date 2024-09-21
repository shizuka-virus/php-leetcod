<?php

/**
 * 535. Encode and Decode TinyURL
 * https://leetcode.com/problems/encode-and-decode-tinyurl/
 */

class Codec
{

    private $map = [];

    /**
     * Encodes a URL to a shortened URL.
     *
     * @param String $longUrl
     * @return String
     */
    function encode($longUrl)
    {
        do {
            $code = substr(md5($longUrl . time() . rand(0, 1000000)), 0, 6);
        } while (isset($this->map[$code]));
        $this->map[$code] = $longUrl;
        return "http://tinyurl.com/" . $code;
    }

    /**
     * Decodes a shortened URL to its original URL.
     *
     * @param String $shortUrl
     * @return String
     */
    function decode($shortUrl)
    {
        return $this->map[explode("com/", $shortUrl)[1]];
    }
}

/**
 * Your Codec object will be instantiated and called as such:
 * $obj = Codec();
 * $s = $obj->encode($longUrl);
 * $ans = $obj->decode($s);
 */