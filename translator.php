<?php
$result = null;
$message ="Je ne connais pas le mot";
$dictionaryEnglishToFrench = [
  "cat" => "chat",
  "dog" => "chien",
  "car" => "voiture",
 "laugh" => "rire",
 "iteration" => "itération"
];

function translate($dictionaryEnglishToFrench, $direction) {
  $word = $_POST["word"];
  
  if($direction === "french") {

    if(array_key_exists($word, $dictionaryEnglishToFrench)) {

      
    }

  }elseif($direction === "english") {

    if(in_array($word, $dictionaryEnglishToFrench)) {}



  }
}

if(!empty($_POST)) {

  $trnaslateWord = translate();
}









include "translator.phtml";