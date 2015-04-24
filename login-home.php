<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to ShareDoc!!</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link type='text/css' rel='stylesheet' href='css/style.css' />
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 

  <script src="js/jquery.min.js"></script>  
<script type="text/javascript">
var jQuery_1_10_2 = $.noConflict(true);
</script>
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>

  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style1.css" > 
</head>
<body>
</head>
<body>
<div class="page-container">
  
  <!-- top navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container">
      <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#"><img src="images/aaaa.png" height="30" width="200"></a>
           <ul class="nav navbar-nav">
        <li class1="active"><a href="#">Welcome  <?= $fgmembersite->UserFullName(); ?>!</a>
        
        <li><a href="library.html">Library</a></li>
       <li><a href='logout.php'>Logout</a></li>
        <li><a href="#">About Us</a></li>
       <li><a href='change-pwd.php'>Change password</a></li>
        
       
      </ul>
      </div>
       </div>
    </div>
<br>
<img src="images/book.gif" align=center><img src="images/logo.png" align=center>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Upload Documents</a></li>
    <li><a href="#tabs-2">Search for Documents</a></li>
    <li><a href="#tabs-3">Update your Profile</a></li>
  <li><a href="#tabs-4">About ShareDoc</a></li>
  </ul>
  <div id="tabs-1">
    <p>Please browse to file you want to upload. Please also complete the Title, Description sections to proceed with the upload.
  <?php
  include 'upload.php';
  ?>
  <br><li>Please upload only PDF's, images and Microsoft Office files</li>
    <li>A file size limit is set to 512 megs.</li>
  </p>
  </div>
  <div id="tabs-2">
    <p>Here you can search for documents. You may type '*' to the text box if you want to show all files.</p>
  <?php
  include 'search.php';
  ?>
  </div>
  <div id="tabs-3">
    <p>Here you can Update your Profile</p>
    <p></p>
  </div>
   <div id="tabs-4">
    <p>AShareDoc is project created for the Project Managment Class by Taky Djarou and Pawan Mishra.</p>
    <p><img src="images/bio.png"></p>
  </div>
</div>

<style>
#footer{
  background-color: #202020;
}
</style>
<div id="footer"><!--footer-->
  <div class="container">
        <div class="row">
          <ul class="list-unstyled">
            <li class="col-sm-4 col-xs-6">
              <a href="#">About</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Services</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Studies</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">References</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Login</a>
            </li>
           <li class="col-sm-4 col-xs-6">
              <a href="#">Press</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Contact</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Impressum</a>
            </li>
          </ul>
    </div><!--/row-->

  </div><!--/container-->
</div>

</body>
</html>
