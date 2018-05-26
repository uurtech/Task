<?php

/**
 * Created by PhpStorm.
 * User: theug
 * Date: 5/26/2018
 * Time: 10:56 AM
 */
class OddNumberTest extends PHPUnit\Framework\TestCase
{
    public function testOddNumber()
    {
        $OddNumbers = new OddNumbers();
        $result = $OddNumbers->getOddNumber([2, 5, 9, 1, 5, 1, 8, 2, 8]);
        $this->assertEquals(9, $result);
        $result = $OddNumbers->getOddNumber([2, 3, 4, 3, 1, 4, 5, 1, 4, 2, 5]);
        $this->assertEquals(4, $result);
    }
}