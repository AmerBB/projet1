<?php session_start(); 
if(!isset($_SESSION['admin'])) header("location:index.php"); 
require_once '../dbconfig.php';

 

if( isset($_POST['champ1'])){
       
    extract($_POST); 

    $query = $db_con->prepare("UPDATE pages SET 
                                          champ1 = :champ1 , 
                                          champ2 = :champ2 , 
                                          champ3 = :champ3 , 
                                          champ4 = :champ4 , 
                                          champ5 = :champ5    
                              where page='upload' ");   

    $query->bindParam(':champ1', $champ1);
    $query->bindParam(':champ2', $champ2);
    $query->bindParam(':champ3', $champ3);
    $query->bindParam(':champ4', $champ4);
    $query->bindParam(':champ5', $champ5); 

    $query->execute();
 
    $message = "les donnée sont bien enregistrés";

}

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adrministration Damart</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A </b>D</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b> Damart</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
           
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="logout.php" class=""> 
                  <span class="hidden-xs">Déconnexion</span>
                </a>
                 
              </li>
              <!-- Control Sidebar Toggle Button --> 
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user8-128x128.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Damart</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
      
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <?php include 'menu.php'; ?>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) --> 
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-warning  box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Modificattion de la page upload photo</h3>
                  <div class="box-tools pull-right"> 
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                 
              <?php if (isset($message)) : ?>
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4>  <i class="icon fa fa-check"></i> Alerte!</h4>
                  <?= $message ?>
                </div>
              <?php endif; ?>
              <!-- Custom Tabs -->
               <form class="form-horizontal" method="post" action="">
              
                    <?php 
                        $page = $db_con->prepare("SELECT * FROM pages where page='upload' ");
                        $page->execute(); 
                        $content = $page->fetch();    
                     ?>  
                     
                        <div class="form-group"> 
                          <div class="col-sm-12">
                            <textarea type="text" class="form-control"  name="champ1" ><?= $content['champ1'] ?></textarea>
                          </div>
                        </div> 
                        <div class="form-group"> 
                          <div class="col-sm-12">
                            <textarea class="form-control"  name="champ2" ><?= $content['champ2'] ?></textarea>
                          </div>
                        </div>
                         <div class="form-group"> 
                          <div class="col-sm-12"> 
                            <textarea type="text" class="form-control"  name="champ3" ><?= $content['champ3'] ?></textarea>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <div class="col-sm-12">
                            <textarea type="text" class="form-control"  name="champ4" ><?= $content['champ4'] ?></textarea>
                          </div>
                        </div> 
                        <div class="form-group"> 
                          <div class="col-sm-12"> 
                            <textarea class="form-control"  name="champ5"><?= $content['champ5'] ?></textarea>
                          </div>
                        </div> 

                        <!-- ////////////////////////////// -->
                        <div class="form-group">
                          <div class="col-sm-12">
                            <button  type="submit"   class="btn btn-warning">Enregister</button>
                          </div>
                        </div>   
                </form> 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

      <!-- Control Sidebar -->
     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>  
    <script type="text/javascript">
      setTimeout(function() { $('.alert-dismissable').slideUp()  },2000)
    </script>
  </body>
</html>
