<?php
  class serialize{
   public funtion serialized($var){   
   
      $myvar = $var;
      $string = serialize($myvar);
     
      return $string;

  }
}
?>
