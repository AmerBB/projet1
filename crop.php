<?php
namespace abeautifulsite;
use Exception;

 
function crop($image) {
	$path = 'upload/';
	require 'lib/SimpleImage.php';
	$img = new SimpleImage(); 
	$resizeImage = 'resize-'.$image;
	$img->load($path.$image)->resize(197, 182)->save($path.$resizeImage);

	return $resizeImage;
}


 
?>
<img src="upload/<?php echo crop('dont_mind_if_u_do.jpg'); ?>">