<?php

/**
 * Created by PhpStorm.
 * User: theug
 * Date: 5/26/2018
 * Time: 10:42 AM
 */
class Thesaurus
{
    private $thesaurus;

    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word)
    {

        $jsonData = array(
            "word" => $word,
            "synonyms" => []
        );
        if(array_key_exists($word,$this->thesaurus)){
            $jsonData["synonyms"]= $this->thesaurus[$word];
        }

        return json_encode($jsonData);
    }
}

$thesaurus = new Thesaurus(array("buy" => array("purchase"), "big" => array("great", "large")));

echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");