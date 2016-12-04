<?php
  class getArgs{
  public funtion Arguements() {
 
   
    $args = func_get_args();

    foreach ($args as $k => $v) {
        echo "arg".($k+1).": $v\n";
    } 
  } 

}
?>
