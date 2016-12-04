<?php

    abstract class controller {
      
      protected $html;

      public function get() {}
      public function post() {}
      public function put() {}
      public function delete() {}
      public function __construct() {
        $header = ' HomePage';
	      $this->html .= $header;
      }
      public function getHTML() {
        
	return $this->html;
      }

    }
