<?PHP 
error_reporting(0);
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Welcome to Global Tek Research Organization!!!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/global-style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<?php require'header.php';?>
</div>
<!-- top-nav -->
<div id="top-menu">
<div class="container">
<div class="row">
<?php require'top-nav-menu.php';?>
</div>
</div>
</div>
<!-- end nav -->
<!-- start banner--->
<div class="container">
<div class="glob-banner">
<div class="row">
<?php require'slider.php'?>
</div>
</div>
<!-- end banner--->
<!-- text flash slider -->
<hr/>
<div id="glo-text-slider">
<?php require'text-slider.php';?>
</div>
<br />
<!-- end text flash slider -->
<!-- Global home page container -->
<div id="glo-home-container">
<div class="row">
<?php require'left-side.php';?>
<!-- side left -->
<!-- side middle content -->
<div class="col-md-6">
<div class="query-form">
<fieldset>
  <legend> <img src="images/join.jpg" /> </legend>
<!-- content here -->
  <form role="form">
   <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="" 
         placeholder="Enter Name">
   </div>
   <div class="form-group">
      <label for="name">Designation</label>
      <input type="text" class="form-control" id="" 
         placeholder="Enter Designation">
   </div>
   <div class="form-group">
      <label for="name">Contact Details</label>
      <input type="text" class="form-control" id="" 
         placeholder="Enter Contact Details">
   </div>
   <div class="form-group">
      <label for="name">Domain</label>
      <input type="text" class="form-control" id="" 
         placeholder="Enter Domain Name">
   </div>
   <div class="form-group">
      <label for="name">Message (Requirements)</label>
      <input type="text" class="form-control" id="" 
         placeholder="Enter Message (Requirements)">
   </div>
    <div class="form-group">
      <label for="name">College / Company</label>
      <input type="text" class="form-control" id="" 
         placeholder="Enter College / Company">
   </div>
   
   <div class="form-group">
      <label for="inputfile">File Upload</label>
      <input type="file" id="inputfile">
      <p class="help-block">Example block-level help text here.</p>
   </div>
   
   <div class="form-group">
      <label for="inputfile">Enter the text you see on the image</label><br />
	  <img src="php_captcha.php"><?php $key=substr($_SESSION['key'],0,6);
								$_SESSION['key']=$key;
					?><p style="visibility:hidden; padding:0; margin:0;">data</p>
					 <input type="text" class="form-control" id="" 
         placeholder="Enter the text you see on the image">
   </div>
   
   <button type="submit" class="btn btn-default">Submit</button>
</form>
</fieldset>
<!-- content here-->
</div>
</div>
<!-- end  middle content -->
<!-- right content -->
<div class="col-md-3">
<p><img src="images/join-us-in.jpg"  width="100%" alt=""/></p>
<div class="recnet-project">
<div>
<?php require'recent-projects.php';?></div>
</div>
</div>
<!-- end right content -->
</div>
</div>
</div>
<hr />
<div id="footer">
<div class="row">
<!-- footer menu -->
<?php require'footer.php';?>
<!-- end footer menu -->
</div>
</div>
<!-- end Global home page container -->
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
