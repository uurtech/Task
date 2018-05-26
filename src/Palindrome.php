<?php
/**
 * Created by PhpStorm.
 * User: theug
 * Date: 5/26/2018
 * Time: 10:18 AM
 */

class Palindrome
{
    public static function isPalindrome($word)
    {

        $word = strtolower($word);
        return ($word === strrev($word)) ? true : false;

    }
}

echo Palindrome::isPalindrome('Deleveled');