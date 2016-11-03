<?php  
require_once 'email/content-email.php';
$GLOBALS['$db'] = $db_con;
include('lib/Requests.php');
Requests::register_autoloader();

$emailing = $db_con->prepare("SELECT champ1 FROM pages where page='emailing-1' ");
$emailing->execute(); 
$content = $emailing->fetch();
$data['sujet'] = $content['champ1'];
 
$data['email'] = $_SESSION['emailUser'];
$data['message'] = contentEmailInscription($_SESSION['nom'], 'emailing-1' ) ;



/**********************************/

$request = Requests::post('http://newsmarrakech.com/send_email.php', array(), $data); 
$request->body;
 
?>