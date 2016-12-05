<?php

  class curl{
   public $url=null;
   public $postURL =null;
   public $parameters =array();
  
  public function __construct($url)
      if(isset($url)){
        $this->url=$url;
        $this->init();
        
        
        // the get  function
      function httpGet($url){
        $ch = curl_init();  
        // meat of function
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false); 
 
        $output=curl_exec($ch);
       //error code to echo out
        if(curl_errno($ch)){
          echo 'Curl error: ' . curl_error($ch);
          header('Location:index.php');
        }
 
          curl_close($ch);
        return $output;
      }
      // culr post needs the url and parameters to post to
      function httpPost($postURL,$parameters){
        $postData = '';
         
         foreach($params as $k => $v){ 
            $postData .= $k . '='.$v.'&'; 
         }
         //trims the data that is being posted to the site.
        $postData = rtrim($postData, '&');
       //initializing the site
        $ch = curl_init();  
 
         curl_setopt($ch,CURLOPT_URL,$url);
         curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
         curl_setopt($ch,CURLOPT_HEADER, false); 
         curl_setopt($ch, CURLOPT_POST, count($postData));
         curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
 
          $output=curl_exec($ch);
          //error checking this will show the error found in the post. 
          //right now i also have set placeholder for return code.
          if(curl_errno($ch)){
            echo 'Curl error: ' . curl_error($ch);
            header('Location:index.php');
          } 
      curl_close($ch);
      return $output; 
    }

}
?>