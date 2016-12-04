<?php

  class csv{
  
  public function readCSV($csv){
	$file_handle = fopen($csv, 'r');
	while (!feof($file_handle) ) {
		$line_of_text[] = fgetcsv($file_handle, 1024);
	}
	fclose($file_handle);
	return $line_of_text;
}


// Set path to CSV file
$csv = 'exmaplefile.csv';

$output = readCSV($csv);
//
$table = new HTML_Table;
echo $table->build_table($output);
}
?>