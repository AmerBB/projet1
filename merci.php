<?php session_start();  require_once 'dbconfig.php';

  $page = $db_con->prepare("SELECT * FROM pages where page='merci' ");
  $page->execute(); 
  $ContentPage = $page->fetch(); 
  $ContentPage = nltobr_($ContentPage);

  $global = $db_con->prepare("SELECT * FROM pages where page='global' ");
  $global->execute(); 
  $ContentGlobal = $global->fetch();  

  $conditions = $db_con->prepare("SELECT * FROM pages where page='condition' ");
  $conditions->execute(); 
  $ContentConditions = $conditions->fetch(); 
  $ContentConditions = nltobr_($ContentConditions); 

  $sth = $db_con->prepare("SELECT * FROM user WHERE id = '".$_SESSION['idUserInsered']."'");
  $sth->execute();
  /* Récupération de toutes les lignes d'un user de résultats */
  $result = $sth->fetchAll();
  //var_dump($result);
  ?>

<!DOCTYPE html>
<html id="full-flip" class="full"  lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?= $ContentGlobal['champ1'] ?></title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<!-- Custom CSS -->

<link href="css/style.css" rel="stylesheet" rel="stylesheet" type="text/css">
<link href="css/build.css" rel="stylesheet" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="flip-t">
<!-- Page Content --> 
<!-- wrapper -->
<div id="wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-6  col-sm-6">
        <div class="content-div">
          <div class="logo"> <img src="img/logo.png" alt="logo" class="img-responsive"> </div>
          <div class="upload text-center">
            <?php 
             foreach( $result as $row ){
               echo '<img src="upload/resize-'.$row['photo'].'"/>';
              }
           ?>
            <h5><?= $ContentPage['champ1'] ?></h5>
          </div>
          <div class="top-big-link text-center"> <a href="mur.php" class="btn btn-primary"><span class="glyphicon"></span> <?= $ContentPage['champ2'] ?></a> </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="landing-content  text-center">
          <?php if (isset($_GET['parrainage'])) { ?>
            <h1 class="parrianege"><i class="fa fa-check"></i>Merci pour vos amis</h1>
        <?php  }else{ ?>
          <h1><i class="fa fa-check"></i><?= $ContentPage['champ3'] ?></h1>
          <?php } ?>
          <h5><?= $ContentPage['champ4'] ?></h5>
          <h4 class="text-center clr-rowz"><?= $ContentPage['champ5'] ?></h4>
          <div class="sale"><img src="img/sale.png" alt="sale"></div>
          <h5><?= $ContentPage['champ6'] ?> <span class="lab-code"><?= $ContentPage['champ7'] ?></span></h5>
          <a href="http://www.damart.fr" class="btn btn-default join" target="_blank">
            <span class="glyphicon glyphicon-play"></span>
            <?= $ContentPage['champ8'] ?>
          </a> 
          <a href="partage.php" class="invit_btn btn btn-default join" >
            <span class="glyphicon glyphicon-play"></span>
            <?= $ContentPage['champ9'] ?>
          </a> 
        </div>
      </div>
      <!--/.col-sm6>--> 
    </div>
    <!-- /.row --> 
  </div>
  <!-- /.container -->
  
  <div id="socialicons" class="text-right navbar navbar-inverse navbar-fixed-bottom"> <a class="icon" href="https://www.facebook.com/Damart/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a> <a class="icon" href="https://twitter.com/damart_fr" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a> <a class="icon" href="https://www.instagram.com/damart_fr/?hl=fr" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a> <a class="icon" href="https://www.youtube.com/user/Damartfr" title="YouTube" target="_blank"><i class="fa fa-youtube"></i></a> <a class="icon" href="https://nichaudnifroid.tumblr.com/" title="chi" target="_blank"><i class=""><img src="img/icon-chii.png" alt="chi"></i></a> <a class="icon" href="https://fr.pinterest.com/damartfr/" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a> </div>
</div>

<!-- Modal Condition-->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="pull-right" > <a href="#close" title="fermer" class="close" data-dismiss="modal">X</a> <span class="close-f" class="close" data-dismiss="modal">Fermer</span> </div>
        <h4 class="modal-title"><?= $ContentConditions['champ1'] ?></h4>
      </div>
      <div class="modal-body">
        <p><?= $ContentConditions['champ2'] ?></p>
      </div>
    </div>
  </div>
</div>
<!-- Modal option -->
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="pull-right" > <a href="#close" title="Close" class="close" data-dismiss="modal">X</a> <span class="close-f">Fermer</span> </div>
        <h4 class="modal-title">Êtes-vous sûre de ne pas vouloir profiter des avantages
          de la newsletter Damart ?</h4>
      </div>
      <div class="modal-body container">
        <p>Ce serait dommage de passer à côté de tous ces privilèges :</p>
        <div class="col-md-5">
          <ul class="fa-ul">
            <li><i class="fa fa-check"></i>Offres exclusives</li>
            <li><i class="fa fa-check"></i>Réductions en avant-première</li>
            <li><i class="fa fa-check"></i>Invitation aux événements</li>
          </ul>
        </div>
        <div class="col-md-5">
          <ul class="fa-ul">
            <li><i class="fa fa-check"></i>10€ offerts</li>
            <li><i class="fa fa-check"></i>La livraison rapide chez vous</li>
          </ul>
        </div>
      </div>
      <a  class="btn btn-default join"><span class="style-p">OUI,</span> je veux profiter des avantages de la newsletter</a>
      <p class="text-center">> NON, je ne veux pas profiter des avantages de la newsletter</p>
    </div>
  </div>
</div>
<!-- /.wrapper -->
<footer> 
  <!-- footer content -->
  <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
  <div class="pull-right"> <a href="#" class="p-footer" data-toggle="modal" data-target="#myModal">Condition</a> 
    <!-- /.footer content --> 
  </div>
</footer>

<!-- jQuery --> 
<script src="js/jquery.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/plugins/canvas-to-blob.min.js" type="text/javascript"></script> 
<script src="js/scripts.js"></script>
</body>
</html>
