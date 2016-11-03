<?php  namespace abeautifulsite;  session_start(); use Exception;
require_once '../dbconfig.php';

function flip($image) {
    $path = '../img/';
    require '../lib/SimpleImage.php';
    $img = new SimpleImage(); 
    $flipImage = 'flip-'.$image;
    $img->load($path.$image)->flip('x');

    if(file_exists( $uploaddir.$name) ) unlink( $uploaddir.$name );

    $img->save($path.$flipImage);
}

extract($_POST);

$uploaddir = '../img/';
$uploadfile = $uploaddir . basename($name);

if(file_exists( $uploaddir.$name) ) unlink( $uploaddir.$name );

if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) { 
	
    $url = $ancre.'#'.$ancre;  

    if( $ancre == 'bg' ){
    	 flip($name);
    }


} else {
    $url = '';
}

 header('Location: pages.php?'.$url);   
?>
