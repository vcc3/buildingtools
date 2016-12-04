<?php

    class homepageController extends controller {
      

      public function get() {
        $this->html .= '<h1>User sign up. click  below:</h1>';
        $this->html .= '<a href="index.php?controller=userController"> User
	Controller</a>';
	
	session_start();
	print_r($_SESSION);
      }
      public function post() {}
      public function put() {}
      public function delete() {}
    }
