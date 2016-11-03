<?php session_start(); 
require_once 'dbconfig.php';
require_once 'email/content-email.php';
include('lib/Requests.php');
function InsertMail($db_con, $email ){
	
	$id_user=$_SESSION['idUserInsered'];
	$q =  $db_con->prepare("INSERT INTO parrainage(id_user,email)  VALUES(:id_user ,:email)");
	$q->bindParam(":id_user",$id_user);
    $q->bindParam(":email",$email);
	$q->execute();
}

Requests::register_autoloader();
// function SendMail($sujet, $email, $message){
// 	$headers ='From: test@damart.fr'."\n";
//     $headers .='Reply-To: no-reply@dmaine.ext'."\n";
//     $headers .='Content-Type: text/html; charset="iso-8859-1 "'."\n";
//     $headers .='Content-Transfer-Encoding: 8bit';

//     if(trim( $email )!='')  mail($email, $sujet, $message, $headers);
// }
$message='Votre ami(e) <strong>'.$_SESSION['nom'].'</strong>  
		  vous invite &agrave; participer &agrave; l&rsquo;op&eacute;ration Damart &ldquo;<strong>Toutes &agrave;<span class="d_b"></span> vos imprim&eacute;s&rdquo;</strong></font>';
$data['sujet'] = "Profitez de -30% sur tous  vos achats gr&acirc;ce &agrave; votre ami(e) !";

$data['message'] = conetentMail($message) ;



/**********************************/






foreach ($_POST['email'] as $email) {
	if(trim($email)!=''){
		InsertMail($db_con, $email);
		$data['email'] = $email;
		$request = Requests::post('http://newsmarrakech.com/send_email.php', array(), $data); 
		$request->body;
	}
}
header('location:merci.php?parrainage=true');
?>


