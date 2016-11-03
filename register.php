<?php session_start();

 require_once 'dbconfig.php';

 if($_POST)
 {
  $sexe = $_POST['sexe'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $user_email =  $_SESSION['emailUser'] = $_POST['user_email'];
  $nwl = $_POST['nwl'];
  $_SESSION['nom']= $_POST['prenom'].' '.$_POST['nom'] ;

 try
  { 
  
   $stmt = $db_con->prepare("SELECT * FROM user WHERE user_email=:email");
   $stmt->execute(array(":email"=>$user_email));
   $count = $stmt->rowCount();
   
   if($count==0){
    
       $stmt = $db_con->prepare("INSERT INTO user(sexe,nom,prenom,user_email,nwl,time)  VALUES(:sexe, :nom, :prenom, :user_email,:nwl,:time)");
       $stmt->bindParam(":sexe",$sexe);
       $stmt->bindParam(":nom",$nom);
       $stmt->bindParam(":prenom",$prenom);
       $stmt->bindParam(":user_email",$user_email);
       $stmt->bindParam(":nwl",$nwl);
       $stmt->bindParam(":time",time());
        
      $result = $stmt->execute();
        if($result)
        {  
          $_SESSION['idUserInsered'] = $db_con->lastInsertId();
          include('send-email-inscription.php');
          header("Location:./upload.php");
        }
        else
        {
             echo "Query could not execute !";
        }
       
       }
   else{
    $_SESSION['exist']="exist";
    header("Location:./index.php?exist=true");
   }
    
  }
  catch(PDOException $e){
       echo $e->getMessage();
  }
 }

?>