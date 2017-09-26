<?php

  $obj = new main();
  $text = "\t\tTest String for String functions";
  $obj->findNumberOfOccurances($text);
  $obj->trimStartingWhiteSpaces($text);
  $obj->splitString($text);
  $obj->stringWordCount($text);
  $obj->stringRepeat();
  $obj->findAString($text);
  $obj->stringLength($text);
  $obj->reverseString($text);
  
  
  $array = array(1,2,3,4,5,6,7);
  $obj->printArray($array);

  class main {

    public function __construct() {

      echo 'hello i\'m an Object </br>';

    }

    public function findNumberOfOccurances($text){
      echo '<h1>1.count_chars function:</h1>';
      foreach (count_chars($text, 1) as $i => $val) {
         echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
      }
      echo '<hr>';
    }

    public function trimStartingWhiteSpaces($text){
      echo '<h1>2.ltrim function:</h1>';
      echo "Before trim $text</br>";
      $trimmed = ltrim($text);
      echo "After trim $trimmed";
      echo '<hr>';
    }

    public function splitString($text){
      echo '<h1>3.str_split function:</h1>';
      $newStringArray = str_split($text);
      print_r($newStringArray);
      echo '<hr>';
    }

    public function stringWordCount($text){
      echo '<h1>4.str_word_count(string) function:</h1>';
      print_r(str_word_count($text, 1));
      echo '<hr>';
    }

    public function stringRepeat(){
      echo '<h1>5.str_repeat(input, multiplier) function:</h1>';
      echo str_repeat("****_____****", 5);
      echo '<hr>';
    }

    public function findAString($text){
      echo '<h1>6.stristr(haystack, needle) function:</h1>';
      if(stristr($text, 'php') === FALSE) {
        echo "\"php\" not found in $text";
      }
      echo '<hr>';
    }

    public function stringLength($text){
      echo '<h1>7.strlen(string) function:</h1>';
      echo strlen($text);
      echo '<hr>';
    }

    public function reverseString($text){
      echo '<h1>8.strrev(string) function:</h1>';
      echo strrev($text);
      echo '<hr>';
    }

    
    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }



?>