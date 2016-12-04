<?php

class HTML_Table {


 public function build_table( array $info){
 
    // builds table
    $html = '<table>';
    // top row of table.
    $html .= '<tr>';
    //foreach($info[0] as $key=>$value){
            //$html .= '<th>' . $value . '</th>';
             $html .= '<th>' . ' Name   '. '</th>';
             $html .= '<th>' . ' Age    '. '</th>';
             $html .= '<th>' . ' Height '. '</th>';
             $html .= '</tr>';
    // start the body of the table.
    $html .= '<tbody>';
    // rows with information
    foreach( $info as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . $value2 . '</td>';
        }
        $html .= '</tr>';
    }

      $hmtl .= '</tbody>';
    // closes table
    $html .= '</table>';
    return $html;
}
}

?>