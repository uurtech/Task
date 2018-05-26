<?php
/**
 * Created by PhpStorm.
 * User: theug
 * Date: 5/26/2018
 * Time: 10:42 AM
 */
class ThesaurusTest extends PHPUnit\Framework\TestCase{

    function testSynonyms(){
        $array = array(
            "buy" => array("purchase"),
            "big" => array("great", "large")
        );
        $dataOne = array(
            "word" => "buy",
            "synonyms" => $array["buy"]
        );
        $dataTwo = array(
            "word" => "big",
            "synonyms" => $array["big"]
        );
        $wrongData = array(
            "word" => "agelast",
            "synonyms" => []
        );

        $Thesaurus = new Thesaurus($array);
        $convertedData = $Thesaurus->getSynonyms("buy");
        $dataOneString = json_encode($dataOne);
        $this->assertJsonStringEqualsJsonString($convertedData,$dataOneString);

        $convertedData = $Thesaurus->getSynonyms("big");
        $dataTwoString = json_encode($dataTwo);

        $this->assertJsonStringEqualsJsonString($convertedData,$dataTwoString);



    }

}