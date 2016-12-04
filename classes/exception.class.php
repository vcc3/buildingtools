<?php

class csvWriter{
  public  $csvinfo;
  public function createCSV($info)
  $info = $csvinnfo;  




if(!file_exists("contacts.csv")) {
      die("File not found");
   }else {
      $file = fopen("contacts.csv","w");
      print "Opened file sucessfully";
   }

foreach ($info as $line)
  {
  fputcsv($file,explode(',',$line));
  }

fclose($file);
 
}

?>