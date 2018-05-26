<?php

/**
 * Created by PhpStorm.
 * User: theug
 * Date: 5/26/2018
 * Time: 10:55 AM
 */
class OddNumbers
{
    /**  * get the number which occurs odd times in the source array  *  * @param $arrValues array  * @return int */
    function getOddNumber($srcValues)
    {

        $oddNumbers = (array_filter($srcValues, function($var){
            return($var & 1);
        }));
        $keys = array_keys($oddNumbers);
        return $srcValues[$keys[0] + 1];//next value

    }


}
