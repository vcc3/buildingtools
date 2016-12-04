<?php

  class userformview {

     public function getHTML() {

       $form = '
           <h1>User Login Form</h1>
           <form action="index.php?controller=userController" method="post">
             <div>
	         <label for="user">User:</label>
	         <input type="text" id="user" name="user" />
	     </div>
	     <div>
	         <label for="password">password:</label>
	         <input type="text" id="password" name="password" />
	     </div>
       <div>
	         <label for="email">email:</label>
	         <input type="text" id="email" name="email" />
	     </div>
      <div>
	         <label for="gender">gender:</label>
	         <input type="text" id="gender" name="gender" />
	     </div>    
           
	     <div class="button">
	        <button type="submit">Save</button>
	     </div>
	   </form>
	   
	   ';
        return $form;
     }

  }
