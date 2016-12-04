<?php


  class validation{
  

  public function  validsanatize{
  
    if (isset($_POST['Submit'])) {
 
        if ($_POST['username'] != "") {
            $_POST['username'] = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            if ($_POST['username'] == "") {
                $errors .= 'Please enter a valid user name.<br/><br/>';
            }
        } else {
            $errors .= 'Please enter your user name.<br/>';
        }

        if ($_POST['email'] != "") {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors .= "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
            }
        } else {
            $errors .= 'Please enter your email address.<br/>';
        }
        //
        if ($_POST['password'] != "") {
            $_POST['password'] = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            if ($_POST['password'] == "") {
                $errors .= 'Please enter a valid password.<br/><br/>';
            }
        } else {
            $errors .= 'Please enter your password.<br/>';
        }
 
 //error messages output
 // this would for sending to an email, usually id want it sent to a database
        if ($errors) {
                   echo '<div style="color: red">' . $errors . '<br/></div>';
        }
    }
  }  
}    
?>