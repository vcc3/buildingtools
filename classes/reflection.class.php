<?php

  class reflection{

  public function getMethod(){
      $class = new ReflectionClass('ReflectionClass');
      $method = $class->getMethod('getMethod');
      return($method);
  }
  public function getConstructor(){
    $class = new ReflectionClass('ReflectionClass');
    $constructor = $class->getConstructor();
    return ($constructor);
  
  
  }
}
?>
