<?php
  class userModel extends model {
    private $username;
    private $password;
    private $email;
    private $gender;
    
    public function setUsername($username) {
      $this->username = $username;  
    }
    public function getUsername() {
      return $this->username;  
    }
    public function setPassword($password) {
      $this->password = $password;
    }
    public function getPassword() {
      return $this->password;
    }
     public function setEmail($email) {
      $this->email = $email;
    }
    public function getEmail() {
      return $this->email;
    }
     public function setGender($gender) {
      $this->gender = $gender;
    }
    public function getGender() {
      return $this->gender;
    }
    
    public function save() {

      //put your saving to the database code here for the user and use the connection in model class
    }
  
  }








