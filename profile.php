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
  <link rel="stylesheet" href="footercss/demo.css">
  <link rel="stylesheet" href="footercss/footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
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
           <a class="navbar-brand" href="#"></a>
           <ul class="nav navbar-nav">
        <li class1="active"><a href="#">Welcome  <?= $fgmembersite->UserFullName(); ?>!</a>
        
        <li><a href="library.html">Library</a></li>
       <li><a href='logout.php'>Logout</a></li>
       
       <li><a href='change-pwd.php'>Change password</a></li>
        
       
      </ul>
      </div>
       </div>
    </div>
<br>
<img src="images/book.gif" align=center><img src="images/cv.png"  height="150" width="1000"align=center>
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
  <style>
  .footer-distributed{
  background-color: #196dba;
}
body{
background-color: #fffff1;
}
#tabs-1{
 background-color: #fffff1;
}
#tabs-2{
 background-color: #fffff1;
}
#tabs-3{
 background-color: #fffff1;
}
#tabs-4{
  background-color: #fffff1;

}
.navbar{
  background-color: #196dba;
}
 

  </style>
   <div id="tabs-4">
    <p>AShareDoc is project created for the Project Managment Class by Taky Djarou and Pawan Mishra.</p>
    <p><img src="images/bio.png"></p>
  </div>
</div>

<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Share<span>Doc</span></h3>

        <p class="footer-links">
       
          ·
          <a href="#">References</a>
          ·
          <a href="#">Studies</a>
          ·
          <a href="#">About US</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name"> &copy;  All Rights Reserved 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>1102 MassAve</span> Boston, MA</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+1 857-777-7777</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">Emailus@sharedoc.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
         This company is started with a purpose of provinding its users  a hassle free place to share, upload and get access to 1000000  different
         resources with ease of access. Its completely free and easy to use. 
        </p>

        <div class="footer-icons">

          <a href="http://ww.facebook.com"><i class="fa fa-facebook"></i></a>
          <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
          <a href="http:/www./linkedin.com"><i class="fa fa-linkedin"></i></a>
          <a href="http://www.github.com"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>

</body>
</html>
