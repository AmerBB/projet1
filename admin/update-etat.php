<?php 
require_once '../email/content-email.php';
require_once '../dbconfig.php'; $GLOBALS['$db'] = $db_con;
include('../lib/Requests.php');
Requests::register_autoloader();


$emailing = $db_con->prepare("SELECT champ1 FROM pages where page='emailing-2' ");
$emailing->execute(); 
$content = $emailing->fetch();
$data['sujet'] = $content['champ1'];

$data['email'] = $_POST['email'];  
$data['message'] = contentEmailInscription($_POST['nom'], 'emailing-2' ) ;
 
$id=$_POST['id'];
$etat=$_POST['etat'];
if ($etat==1) $etat=0;
else $etat=1;

$modif_etat = $db_con->exec("UPDATE user SET etat=$etat where id=$id");
echo $etat;

/**********************************/
if($etat == 1){
$request = Requests::post('http://newsmarrakech.com/send_email.php', array(), $data); 
$request->body;
}

?>