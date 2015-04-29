<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="stylesheet" href="footercss/demo.css">
  <link rel="stylesheet" href="footercss/footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link type='text/css' rel='stylesheet' href='css/style.css' />

  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>
<div class="page-container">
  <style>
body{
background-color: #ffffff ;
}
  </style>
  <!-- top navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container">
      <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#"><img src="Images/aaaa.png" height="30" width="100"></a>
           <ul class="nav navbar-nav">
        <li class1="active"><a href="#"><b>shareDoc </b></a></li>
        <li><a href="register.php">Register</a></li>


        <li><a href="#">About Us</a></li>
       
      </ul>
      </div>
       </div>
    </div>
<br><br><br><br>
<!-- Form Code Start -->
<div align=center id='fg_membersite'>
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<h1>Please sign in here or Sign up if you haven't registred yet! </h1>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");


</script>
</div>
<style>
.footer-distribution {
  margin-top: 400px;
}

</style>
<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Company<span>logo</span></h3>

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

        <p class="footer-company-name">ShareDoc  &copy; 2015</p>
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