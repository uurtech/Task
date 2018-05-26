<?php
/**
 * Created by PhpStorm.
 * User: theug
 * Date: 5/26/2018
 * Time: 10:27 AM
 */
class FileOwnersTest extends PHPUnit\Framework\TestCase{

    function testArrayFlip(){
        $files = array(
            "Input.txt" => "Randy",
            "Code.py" => "Stan",
            "Output.txt" => "Randy");


        $expectedArray= array(
            "Randy" => "Input.txt",
            "Stan" => "Code.py",
            "Randy" => "Output.txt"
        );
        $reversedArray = FileOwners::groupByOwners($files);
        $diffCount = count(array_diff($files,$reversedArray));
        $this->assertEquals(0,$diffCount);
        //could use assertCount too.
    }

}