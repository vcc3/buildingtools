<?php

class Switch{

public function options($value)

public $option;
$this->option =$value;

  switch (true) {
    case $value === '0' :
        echo 'variable was set to zero';
        break;
    case $value === '' :
        echo 'variable was set to empty';
        break;
    case $value === null :
        echo 'variable was set to null';
        break;
    default :
        echo 'default';
        break;
  }
}
?>
