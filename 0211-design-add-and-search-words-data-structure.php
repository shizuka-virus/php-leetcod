<?php

/**
 * 211. Design Add and Search Words Data Structure
 * https://leetcode.com/problems/design-add-and-search-words-data-structure/
 */

class WordDictionary
{
    /**
     * Initialize your data structure here.
     */
    private $database = [];

    function __construct()
    {

    }

    /**
     * Adds a word into the data structure.
     * @param String $word
     * @return NULL
     */
    function addWord($word)
    {
        $this->database[] = $word;
        return NULL;
    }

    /**
     * Returns if the word is in the data structure. A word could contain the dot character '.' to represent any one letter.
     * @param String $word
     * @return Boolean
     */
    function search($word)
    {
        return preg_grep('/^' . $word . '$/', $this->database);
    }
}

/**
 * Your WordDictionary object will be instantiated and called as such:
 * $obj = WordDictionary();
 * $obj->addWord($word);
 * $ret_2 = $obj->search($word);
 */