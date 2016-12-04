<?php
  class FindFiles{
  public function findFiles(){
  
  $files = glob('*.{php,csv,html}', GLOB_BRACE);
  $files =array_map('realpath',$files);
  return $files;
  }
}
?>
