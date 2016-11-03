<?php  namespace abeautifulsite;  session_start(); use Exception;

require 'lib/SimpleImage.php';
require_once 'dbconfig.php'; 

$path = 'upload/';
 


$stmt = $db_con->prepare(" SELECT * FROM user ");
$stmt->execute();
while ($row = $stmt->fetch()):

        if( trim($row['photo'])!= "" ){
            $image = $row['photo'];
            $resizeImage = 'resize-'.$image; 
            try {
                $img = new SimpleImage(); 
                $img->load($path.$image)->thumbnail(197, 182)->save($path.$resizeImage);


            } catch(Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
            
}

endwhile;


  
?>