<?php
/**
 * Created by PhpStorm.
 * User: theug
 * Date: 5/26/2018
 * Time: 10:25 AM
 */

class FileOwners
{
    public static function groupByOwners($files)
    {

        return array_reverse($files);


    }
}

$files = array(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy");

var_dump(FileOwners::groupByOwners($files));