<?php session_start();  require_once 'dbconfig.php';

  $page = $db_con->prepare("SELECT * FROM pages where page='upload' ");
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
<html class="full" lang="fr">
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
<div id="wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-6  col-sm-6">
        <div class="content-div">
          <div class="logo"> <img src="img/logo.png" alt="logo" class="img-responsive"> </div>
          <div class="upolad">
            <form enctype="multipart/form-data" id="form" action='' method="post">
              <!-- Include initial preview count -->
              
              <input id="input-fcount-1" name="inputfcount1[]" multiple type="file" class="file-loading" accept="image/1*">
         
              <div class="btn btn-primary validPhoto">  
                <a href="merci.php"> <i class="glyphicon glyphicon-play play-gly"></i>&nbsp; <span><?= $ContentPage['champ3']; ?></span> </a> 
              </div>
              <img class="rotate-photo" src="img/picto-rotation.png">
              <p class="text-center"><?= $ContentPage['champ4']; ?></p>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="landing-content  text-center upload-info">
          <h4 class="text-center clr-rowz"><?= $ContentPage['champ5']; ?></h4>
          <div class="sale"><img src="img/sale.png" alt="sale"></div>
        </div>
      </div>
    </div>
    <div id="socialicons" class="text-right navbar navbar-inverse navbar-fixed-bottom"> <a class="icon" href="https://www.facebook.com/Damart/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a> <a class="icon" href="https://twitter.com/damart_fr" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a> <a class="icon" href="https://www.instagram.com/damart_fr/?hl=fr" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a> <a class="icon" href="https://www.youtube.com/user/Damartfr" title="YouTube" target="_blank"><i class="fa fa-youtube"></i></a> <a class="icon" href="https://nichaudnifroid.tumblr.com/" title="chi" target="_blank"><i class=""><img src="img/icon-chii.jpg"></i></a> <a class="icon" href="https://fr.pinterest.com/damartfr/" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a> </div>
  </div>
  <!--/.col-sm6>
     /.row --> 
</div>
<!-- /.container -->
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
<script src="js/fileinput.js" type="text/javascript"></script> 
<script src="js/fileinput_locale_fr.js" type="text/javascript"></script> 
<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/scripts.js"></script> 
<script>
 $("#input-fcount-1").fileinput({
    uploadUrl: "movefile.php",
    dropZoneTitle: '<?= str_replace(array("\r","\n"),"",$ContentPage['champ1']); ?>',
    maxFileCount: 1,
    validateInitialCount: true,
    overwriteInitial: false,  
    showUpload: false, 
    showRemove:false,
    showCaption:false,
    showClose:true, 
    showCancel:false, 
    allowedFileExtensions: ["jpg", "png", "gif"],
    maxFileSize: 3072,
     maxImageWidth: 197,
    /*maxImageHeight: 180,*/
    resizePreference: 'width',
    resizeImage: true
});
$(".hidden-xs").text('<?= str_replace(array("\r","\n"),"",$ContentPage['champ2']); ?>'); 
$('.glyphicon').removeClass('glyphicon-folder-open ').addClass('glyphicon-play');
$('.glyphicon').addClass('play-gly');
$('.file-input-ajax-new').addClass('text-center');

$('<p class="changephoto"></p>').insertAfter( $( ".file-preview-thumbnails" ) );
var interval = null;

$('#input-fcount-1').change(function(){  
  //$('.fileinput-remove').click()
  UploadImage_();
})

 
$('form').on('click','.changephoto',function () {
  $('.fileinput-remove').click()
  $('#input-fcount-1')[0].click()  
  return false; 
})

function UploadImage_ () {
     $('.changephoto').fadeOut('100')
     $('.file-drop-zone .file-preview-thumbnails').css('opacity','0')
     setTimeout(function(){ 
       $('.kv-file-upload').click() 
       $('.file-preview-thumbnails img').attr('src','img/loader.gif') 
      
       setTimeout(function(){ 
          $('.file-drop-zone .file-preview-thumbnails').css('opacity','1')
       },300)   
     },200) 
  }

function progresscomplete( nomImage ){     
      $('.file-input > .btn-file').slideUp();
      $('.file-input > .label-roz').slideUp();
      $('.validPhoto').fadeIn();
      $('.changephoto').html( '<a href="#">> Changer la photo</a>').fadeIn();  
      $('.rotate-photo').fadeIn();
      setTimeout(function () {
        $('.file-preview-thumbnails img').attr('src','./upload/'+nomImage)  
        $('.file-thumb-progress .progress-bar').css('width','100%').text('100%').parents('.file-thumb-progress').fadeOut('slow');
      },1000) 
}


///////////////////***** rotation de la photo  *****////////////////
var rotation = 0;

jQuery.fn.rotate = function(degrees) {
    $(this).css({'-webkit-transform' : 'rotate('+ degrees +'deg)',
                 '-moz-transform' : 'rotate('+ degrees +'deg)',
                 '-ms-transform' : 'rotate('+ degrees +'deg)',
                 'transform' : 'rotate('+ degrees +'deg)'});
    return $(this);
};

$('.rotate-photo').click(function() {
    rotation += 90;
    if(rotation == 360) rotation = 0;
    if(rotation == 90 || rotation == 270) $('body').addClass('rotate')
    else $('body').removeClass('rotate')
    

    $.ajax({
              method: "POST",
              url: "rotate-photo.php",
              data: { degre: rotation }
        })
        .done(function( data ) {
          $('.file-preview-frame > img').rotate(rotation);
        })
});
///////////////////////////////////////////////////////////////////
</script>
</body>
</html>
