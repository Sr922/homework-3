<?php

  $obj = new main();
  $text = "\t\tTest String for String functions";
  $obj->findNumberOfOccurances($text);
  
  
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

    
    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }



?>