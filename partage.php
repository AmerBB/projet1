<?php session_start();  require_once 'dbconfig.php';

  $page = $db_con->prepare("SELECT * FROM pages where page='parrainage' ");
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
<html class="full"  lang="en">
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
<body>
<!-- Page Content --> 
<!-- wrapper -->
<div id="wrap" class="partage">
  <div class="container">
    <div class="row">
      <div class="col-md-6  col-sm-6">
        <div class="content-div">
          <div class="logo"> <img src="img/logo.png" alt="logo" class="img-responsive"> </div>
          <h4 class="form-title text-center"><?= $ContentPage['champ1'] ?></h4>
          <form class="form-horizontal share" role="form" action="parrainage.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control vld email user_email" name="email[]" id="user_email" placeholder="Email" data-placement="left" data-trigger="manual" data-html="true" data-content="L’adresse est <span class='popover-color'>email est invalide</span>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control vld email user_email" name="email[]" id="email1" placeholder="Email" data-placement="left" data-trigger="manual" data-html="true" data-content="L’adresse est <span class='popover-color'>email est invalide</span>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control vld email user_email" name="email[]" id="email2" placeholder="Email" data-placement="left" data-trigger="manual" data-html="true" data-content="L’adresse est <span class='popover-color'>email est invalide</span>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control vld email user_email" name="email[]" id="email3" placeholder="Email" data-placement="left" data-trigger="manual" data-html="true" data-content="L’adresse est <span class='popover-color'>email est invalide</span>">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default btn-md"><span class="glyphicon glyphicon-play"></span><?= $ContentPage['champ2'] ?></button>
            </div>
          </form>
        </div>
        <button class="btn btn-default back text-center" onclick="history.back()">
        <a href="merci.html"><i class="fa fa-play"></i><?= $ContentPage['champ3'] ?></a>
        </button>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="landing-content  text-center upload-info">
          <h4 class="text-center clr-rowz"><?= $ContentPage['champ4'] ?></h4>
          <div class="sale"> <a href="#"><img src="img/sale.png" alt="sale"></a></div>
        </div>
      </div>
      <!--/.col-sm6>--> 
    </div>
    <!-- /.row --> 
  </div>
  <!-- /.container -->
  <div id="socialicons" class="text-right navbar navbar-inverse navbar-fixed-bottom"> <a class="icon" href="https://www.facebook.com/Damart/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a> <a class="icon" href="https://twitter.com/damart_fr" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a> <a class="icon" href="https://www.instagram.com/damart_fr/?hl=fr" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a> <a class="icon" href="https://www.youtube.com/user/Damartfr" title="YouTube" target="_blank"><i class="fa fa-youtube"></i></a> <a class="icon" href="https://nichaudnifroid.tumblr.com/" title="chi" target="_blank"><i class=""><img src="img/icon-chii.jpg" alt="chi"></i></a> <a class="icon" href="https://fr.pinterest.com/damartfr/" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a> </div>
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
<script src="js/fileinput.js" type="text/javascript"></script> 
<script src="js/fileinput_locale_fr.js" type="text/javascript"></script> 
<script src="js/fileinput_locale_es.js" type="text/javascript"></script> 
<script src="js/scripts.js"></script> 
<script>
if (window.matchMedia("(max-width: 1002px)").matches) {
  $('[data-trigger="manual"]').attr("data-placement", "right");
} else {
 $('[data-trigger="manual"]').attr("data-placement", "left");
}
 </script>
</body>
</html>
