<?php
  namespace Chirp;
  require_once '../../dbconfig.php';

  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.
  $result = $db_con->prepare("SELECT * FROM user ");
  $result->execute();

  while($row = $result->fetch()):
      $data[] = array( 
                        'Nom' =>utf8_decode($row['nom']) , 
                        'Prenom' =>utf8_decode($row['prenom']) , 
                         utf8_decode('Civilité') =>$row['sexe'] , 
                        'Email' =>$row['user_email'] , 
                        'Nwl' =>$row['nwl'] ? 'Oui' : 'Non' , 
                        'Etat de compte' => $row['nwl'] ? 'Active' : 'Inactive'
                     );
  endwhile; 
  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // file name for download
  $filename = "users.xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  foreach($data as $row) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\n";
  }

  exit;
?>