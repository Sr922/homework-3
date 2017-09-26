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
  $obj->regExMatch();
  $obj->substring($text);
  
  
  $array = array(1,2,3,4,5,5,6,7);
  $obj->countArray($array);
  $obj->elementExist($array);
  $obj->position($array);
  $obj->printRange();
  $obj->sortArray($array);
  $obj->removeDuplicateElement($array);

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

    public function regExMatch(){
      echo '<h1>9.preg_match(pattern, subject) function:</h1>';
      preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
      print_r($matches);
      echo '<hr>';
    }

    public function substring($text){
      echo '<h1>10.substr(string, start) function:</h1>';
      echo substr($text, 5);
      echo '<hr>';
    }

    public function countArray($array){
      echo '<h1>1.count(var) function:</h1>';
      echo count($array);
      echo '<hr>';
    }

    public function elementExist($array){
      echo '<h1>2.in_array(needle, haystack) function:</h1>';
      if (in_array(6, $array)) {
          echo "Got 6";
      }
      echo '<hr>';
    }

    public function position($array){
      echo '<h1>3.pos() function:</h1>';
      echo pos($array);
      echo '<hr>';
    }

    public function printRange(){
      echo '<h1>4.range(low, high) function:</h1>';
      foreach (range(0, 100, 10) as $number) {
        echo $number;
      }
      echo '<hr>';
    }

    public function sortArray($array){
      echo '<h1>5.sort(array) function:</h1>';
      sort($array, SORT_NATURAL | SORT_FLAG_CASE);
      foreach ($array as $key => $val) {
          echo "Array[" . $key . "] = " . $val . "\n";
      }
      echo '<hr>';
    }

    public function removeDuplicateElement($array){
      echo '<h1>6.array_unique(array) function:</h1>';
      $result = array_unique($array);
      print_r($result);
      echo '<hr>';
    }

    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }



?>