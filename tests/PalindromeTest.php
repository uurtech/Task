<?php
/**
 * Created by PhpStorm.
 * User: theug
 * Date: 5/26/2018
 * Time: 10:19 AM
 */

class PalindromeTest extends PHPUnit\Framework\TestCase{

    function testIsPalindrome(){
        $this->assertFalse(Palindrome::isPalindrome("Good"));
        $this->assertTrue(Palindrome::isPalindrome("Deleveled"));

    }

}