<?php session_start(); 
if(!isset($_SESSION['admin'])) header("location:index.php"); 
require_once '../dbconfig.php';

 
/////////////////////////////////////////////////////////////
if( isset($_POST['titlesite'])){ 
    extract($_POST);  
    $query = $db_con->prepare("UPDATE pages SET 
                                          champ1 = :champ1  
                              where page='global' ");    
    $query->bindParam(':champ1', $titlesite);   
    $query->execute();  

    header('Location: pages.php?message-page-title');   
}
/////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////
if( isset($_POST['champ1'])){ 
    extract($_POST);  
    $query = $db_con->prepare("UPDATE pages SET 
                                          champ1 = :champ1 , 
                                          champ2 = :champ2  
                              where page='condition' ");    
    $query->bindParam(':champ1', $champ1);
    $query->bindParam(':champ2', $champ2);  
    $query->execute();  

    header('Location: pages.php?message#condition');   
}
/////////////////////////////////////////////////////////////


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
    <style type="text/css">
    form img {
        vertical-align: middle;
        max-width: 400px;
        margin: 0 auto;
        display: block;
        width: 90%;
    }
    form input[type=file] {
       float: left; margin-right: 30px;
       margin-top: 5px;
    }
    .bg-images img {
        max-width: 140px;
        margin: 0;
        border: 1px solid #c5c2c2;
    }
    table th{
      background: #939393;
      color: #fff;
    }
    .btn.btn-app {
        margin: 0;
        padding: 5px 0;
        height: 47px;
        min-width: 70px;
    }
    table tr:nth-child(odd) {background: #ececec;}
    </style>
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
              <div class="box box-primary  box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Titre Du Site</h3>
                  <div class="box-tools pull-right"> 
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="box-body table-responsive">
                     <div class="box-body">

                        <?php if (isset($_GET['message-page-title'])) : ?>
                        <div class="alert alert-success alert-dismissable">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h4>  <i class="icon fa fa-check"></i> Alerte!</h4>
                          le Titre sont bien modifié
                        </div>
                      <?php endif; ?>
                      <!-- Custom Tabs -->
                       <form class="form-horizontal" method="post" action=""> 
                            <?php 
                                $global = $db_con->prepare("SELECT * FROM pages where page='global' ");
                                $global->execute(); 
                                $contentGlobal = $global->fetch();    
                             ?>   
                                <div class="form-group"> 
                                  <div class="col-sm-12">
                                   <input type="text" class="form-control"  name="titlesite" value="<?= $contentGlobal['champ1'] ?>"></input>
                                  </div>
                                </div>   
                                <!-- ////////////////////////////// -->
                                <div class="form-group">
                                  <div class="col-sm-12">
                                    <button  type="submit"   class="btn btn-warning">Enregister</button>
                                  </div>
                                </div>  
                            <textarea type="submit" style="display: none;"></textarea>  
                        </form> 

                </div><!-- /.box-body -->
                  </div><!-- /.box-body -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div> 
            <div class="col-md-12">
              <div class="box box-primary  box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Liste des pages</h3>
                  <div class="box-tools pull-right"> 
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="box-body table-responsive no-padding">
                  <table class="table table-hover list-inscription">
                    <tr>
                      <th>Pages</th>
                      <th style="text-align: center;">Modifier</th> 
                    </tr> 
                    <tr>
                      <td valign="middle">Page d'accueil</td>
                      <td align="center">
                        <a class="btn btn-app" href="pages-index.php">
                          <i class="fa fa-edit"></i> Editer
                        </a>
                      </td> 
                    </tr> 
                    <tr>
                      <td valign="middle">Page upload image</td>
                      <td align="center">
                        <a class="btn btn-app" href="page-upload-photo.php">
                          <i class="fa fa-edit"></i> Edit
                        </a>
                      </td> 
                    </tr>
                    <tr>
                      <td valign="middle">Page merci</td>
                      <td align="center">
                        <a class="btn btn-app" href="page-merci.php">
                          <i class="fa fa-edit"></i> Edit
                        </a>
                      </td> 
                    </tr> 
                    <tr>
                      <td valign="middle">Page parrainage</td>
                      <td align="center">
                        <a class="btn btn-app" href="page-parrainage.php">
                          <i class="fa fa-edit"></i> Edit
                        </a>
                      </td> 
                    </tr> 
                    <tr>
                      <td valign="middle">Page mur</td>
                      <td align="center">
                        <a class="btn btn-app" href="page-mur.php">
                          <i class="fa fa-edit"></i> Edit
                        </a>
                      </td> 
                    </tr>  
                  </table>
                </div><!-- /.box-body -->
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div> 
            <div class="col-md-6"  id="logo">
              <div class="box box-warning  box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Logo</h3>
                  <div class="box-tools pull-right"> 
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="background-color: #e6e6e6">
                  
              <!-- Custom Tabs -->
              <?php if (isset($_GET['logo'])) : ?>
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4>  <i class="icon fa fa-check"></i> Alerte!</h4>
                  l'image est bien téléchargé
                </div>
              <?php endif; ?>
               <form class="form-horizontal" method="post" action="upload-images.php"  enctype="multipart/form-data">
                
                    <img src="../img/logo.png">
                     <br><br>
                    <div class="col-md-12">
                      <div class="box box-success">
                        <div class="box-header with-border">
                          <h3 class="box-title">Changer Le Logo</h3>
                          <div class="box-tools pull-right"> 
                          </div><!-- /.box-tools -->
                        </div><!-- /.box-header -->
                        <div class="box-body">
                         <input type="file" name="file" required></input>
                         <input type="hidden" name="page" value="global"></input>
                         <input type="hidden" name="champ" value="champ1"></input>
                         <input type="hidden" name="name" value="logo.png"></input>
                         <input type="hidden" name="ancre" value="logo"></input>
                        <button  type="submit"   class="btn btn-warning">Je télécharge</button>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div> 
                </form> 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

            <div class="col-md-6"  id="sale">
              <div class="box box-warning  box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Promotion</h3>
                  <div class="box-tools pull-right"> 
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="background-color: #e6e6e6">
               
              <!-- Custom Tabs -->
              <?php if (isset($_GET['sale'])) : ?>
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4>  <i class="icon fa fa-check"></i> Alerte!</h4>
                  l'image est bien téléchargé
                </div>
              <?php endif; ?>
               <form class="form-horizontal" method="post" action="upload-images.php"  enctype="multipart/form-data" >
                
                    <img src="../img/sale.png">
                    <br><br>
                    <div class="col-md-12">
                      <div class="box box-success">
                        <div class="box-header with-border">
                          <h3 class="box-title">Changer La photo de promotion</h3>
                          <div class="box-tools pull-right"> 
                          </div><!-- /.box-tools -->
                        </div><!-- /.box-header -->
                        <div class="box-body">
                         <input type="file" name="file" required></input>
                           <input type="hidden" name="page" value="global"></input>
                           <input type="hidden" name="champ" value="champ2"></input>
                           <input type="hidden" name="name" value="sale.png"></input>
                           <input type="hidden" name="ancre" value="sale"></input>
                        <button  type="submit"   class="btn btn-warning">Je télécharge</button>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div> 
                </form>  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
            <div class="col-md-12 no-padding">
              <div class="col-md-6"  id="bg">
                <div class="box box-warning  box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">Images d'arrière-plan du jeu</h3>
                    <div class="box-tools pull-right"> 
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body" style="background-color: #e6e6e6"> 
                <!-- Custom Tabs -->
                <?php if (isset($_GET['bg'])) : ?>
                  <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>  <i class="icon fa fa-check"></i> Alerte!</h4>
                    l'image est bien téléchargé
                  </div>
                <?php endif; ?>
                 <form class="form-horizontal bg-images" method="post" action="upload-images.php"  enctype="multipart/form-data" > 
                      <div class="col-md-12">
                        <div class="box box-success">
                          <div class="box-header with-border">
                            <h3 class="box-title">Changer La photo d'arrière-plan -> Taille (1258 x 700)</h3>
                             
                          </div><!-- /.box-header -->
                          <div class="box-body">
                           <img src="../img/bg.png">
                           <input type="file" name="file" required></input>
                             <input type="hidden" name="page" value="global"></input> 
                             <input type="hidden" name="name" value="bg.png"></input>
                             <input type="hidden" name="ancre" value="bg"></input>
                          <button  type="submit"   class="btn btn-warning">Je télécharge</button>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                      </div> 
                  </form>  
                  <form class="form-horizontal bg-images" method="post" action="upload-images.php"  enctype="multipart/form-data" > 
                      <div class="col-md-12">
                        <div class="box box-success">
                          <div class="box-header with-border">
                            <h3 class="box-title">Changer La photo d'arrière-plan -> Taille (1002 x 700)</h3>
                             
                          </div><!-- /.box-header -->
                          <div class="box-body">
                           <img src="../img/bg-1002.png">
                           <input type="file" name="file" required></input>
                             <input type="hidden" name="page" value="global"></input> 
                             <input type="hidden" name="name" value="bg-1002.png"></input>
                             <input type="hidden" name="ancre" value="bg"></input>
                          <button  type="submit"   class="btn btn-warning">Je télécharge</button>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                      </div> 
                  </form> 
                  <form class="form-horizontal bg-images" method="post" action="upload-images.php"  enctype="multipart/form-data" > 
                      <div class="col-md-12">
                        <div class="box box-success">
                          <div class="box-header with-border">
                            <h3 class="box-title">Changer La photo d'arrière-plan -> Taille (768 x 700)</h3>
                             
                          </div><!-- /.box-header -->
                          <div class="box-body">
                           <img src="../img/bg-768.png">
                           <input type="file" name="file" required></input>
                             <input type="hidden" name="page" value="global"></input> 
                             <input type="hidden" name="name" value="bg-768.png"></input>
                             <input type="hidden" name="ancre" value="bg"></input>
                          <button  type="submit"   class="btn btn-warning">Je télécharge</button>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                      </div> 
                  </form> 
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div>








              <div class="col-md-6" id="condition">
                <div class="box box-warning  box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">Les conditions générales</h3>
                    <div class="box-tools pull-right"> 
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="box-body">
                   
                <?php if (isset($_GET['message'])) : ?>
                  <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>  <i class="icon fa fa-check"></i> Alerte!</h4>
                    les donnée sont bien enregistrés
                  </div>
                <?php endif; ?>
                <!-- Custom Tabs -->
                 <form class="form-horizontal" method="post" action="">
                
                      <?php 
                          $condions = $db_con->prepare("SELECT * FROM pages where page='condition' ");
                          $condions->execute(); 
                          $content = $condions->fetch();    
                       ?>   
                          <div class="form-group"> 
                            <div class="col-sm-12">
                              <textarea type="text" class="form-control"  name="champ1" ><?= $content['champ1'] ?></textarea>
                            </div>
                          </div> 
                          <div class="form-group"> 
                            <div class="col-sm-12">
                              <textarea class="form-control"  name="champ2"  rows="20"><?= $content['champ2'] ?></textarea>
                            </div>
                          </div>

                          <!-- ////////////////////////////// -->
                          <div class="form-group">
                            <div class="col-sm-12">
                              <button  type="submit"   class="btn btn-warning">Enregister</button>
                            </div>
                          </div>  
                      <textarea type="submit" style="display: none;"></textarea>  
                  </form> 
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div>

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
    <script type="text/javascript">   setTimeout(function() { $('.alert-dismissable').slideUp()  },2000)  </script>
  </body>
</html>
