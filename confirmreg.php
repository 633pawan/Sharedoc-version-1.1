<?PHP
require_once("./include/membersite_config.php");

if(isset($_GET['code']))
{
   if($fgmembersite->ConfirmUser())
   {
        $fgmembersite->RedirectToURL("thank-you-regd.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Confirm registration</title>
      <link rel="stylesheet" href="footercss/demo.css">
  <link rel="stylesheet" href="footercss/footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link type='text/css' rel='stylesheet' href='css/style.css' />

  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>
<style>
body{
background-color: #202020 ;
}
</style>
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
        <li class1="active"><a href="#"><b>shareDoc </b></a></li>
       
<style>
.footer-distributed{
  background-color: #196dba
}
body{
background-color: #fffff1;
}
.navbar{
  background-color:#196dba;
}
</style>

        <li><a href="#">About Us</a></li>
       
      </ul>
      </div>
       </div>
    </div>
    <br><br> <br><br>

<h2>Confirm registration</h2>
<p>
Please enter the confirmation code in the box below
</p>

<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='confirm' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='get' accept-charset='UTF-8'>
<div class='short_explanation'>* required fields</div>
<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='code' >Confirmation Code:* </label><br/>
    <input type='text' name='code' id='code' maxlength="50" /><br/>
    <span id='register_code_errorloc' class='error'></span>
</div>
<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</form>


<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("confirm");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("code","req","Please enter the confirmation code");

// ]]>
</script>
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

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>

</body>
</html>