<?php session_start();  require_once 'dbconfig.php';

  $page = $db_con->prepare("SELECT * FROM pages where page='mur' ");
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
<html  lang="en" id="mur-f">
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
 
<link href="css/build.css" rel="stylesheet" rel="stylesheet" type="text/css">
<link href="css/jcf.css"  rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
<style type="text/css" id="page-css">
/* Styles specific to this particular page */

.jcf-scrollable {
  width: 100%!important;
  padding: 0!important;
  margin: 0!important;
  height: 700px!important;
  overflow: hidden;
} 
</style>
</head>
<body class="mur">
<!-- Page Content --> <!-- wrapper -->
<div id="wrap" class="index">
  <div class="container-fluid" >
    <div class="row">
      <div class="col-md-4 col-sm-6 div-join ">
        <div class="logo">
          <h4 class="title"><?= $ContentPage['champ1'] ?></h4>
          <img src="img/logo.png" class="img-responsive" alt="logo"></div>
        <div class="landing-content  text-center">
          <h4 class=" clr-rowz"><?= $ContentPage['champ2'] ?></h4>
          <div class="sale "> <a href="./"><img src="img/sale.png" class="img-responsive" alt="sale"></a></div>
          <div class="top-big-link"> <a href="./" class="btn btn-default join join-m"><span class="glyphicon glyphicon-play"></span><?= $ContentPage['champ3'] ?></a> </div>
        </div>
      </div>
      <div class="jcf-scrollable">
        <ul class="horizontal-slide list-inline">
          <?php 
              $stmt = $db_con->prepare("SELECT * FROM user where etat=1 order by id desc");
              $stmt->execute();
              while ($row = $stmt->fetch()):
           ?>
                  <li>
                    <img class="img-responsive"  src="upload/resize-<?= $row['photo'] ; ?>"/>
                  </li>
          <?php endwhile; ?>   
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- /.wrapper --> <!-- Modal Condition-->
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
<!-- modal fade -->
<footer> <!-- footer content -->
  <div class="navbar navbar-inverse navbar-fixed-bottom footer-m" role="navigation">
    <ul class="pull-right list-inline">
      <li>
        <div id="socialicons" class="text-right social-footer"> <a class="icon" href="https://www.facebook.com/Damart/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a> <a class="icon" href="https://twitter.com/damart_fr" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a> <a class="icon" href="https://www.instagram.com/damart_fr/?hl=fr" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a> <a class="icon" href="https://www.youtube.com/user/Damartfr" title="YouTube" target="_blank"><i class="fa fa-youtube"></i></a> <a class="icon" href="https://nichaudnifroid.tumblr.com/" title="chi" target="_blank"><i class=""><img src="img/chiii-icon.png" alt="chi"></i></a> <a class="icon" href="https://fr.pinterest.com/damartfr/" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a> </div>
      </li>
      <li><a href="#" class="p-footer" data-toggle="modal" data-target="#myModal">Condition</a></li>
    </ul>
    <!-- /.footer content --> </div>
</footer>
<!-- latest jQuery direct from google's CDN --> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<!-- the jScrollPane script -->  
<script src="js/jcf.js"  type="text/javascript" ></script>
<script src="js/jcf.scrollable.js"  type="text/javascript" ></script>
<script src="js/ie.js"  type="text/javascript" ></script>
<script>
  $(function() {
    jcf.replaceAll();
    if( $('.jcf-scrollable-wrapper > div').hasClass('jcf-scrollbar-vertical') ) $('body').addClass('jspScrollable_');
    else $('body').removeClass('jspScrollable_');
  });
</script>

</body>
</html>
