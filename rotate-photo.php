<?php  namespace abeautifulsite;  session_start(); use Exception;
require 'lib/SimpleImage.php';
 
function rotate($image, $degre) {
	require_once 'dbconfig.php'; 

    $path = 'upload/';
    $img = new SimpleImage(); 
    $newPrefix = time().$image;
    $rotateImage = 'resize-'.$newPrefix; 
    $img->load($path.$image)->rotate($degre)->thumbnail(197, 182,'top')->save($path.$rotateImage);
    $id=$_SESSION['idUserInsered'];
    $modif_etat = $db_con->exec("UPDATE user SET photo='$newPrefix' where id=$id");
    return $rotateImage;
}

if(isset($_POST['degre']) && $_POST['degre'] <= 270 ){ 

	echo $_SESSION['photo']."--".rotate($_SESSION['photo'], $_POST['degre']);

} 
?>