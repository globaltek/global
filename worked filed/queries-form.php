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
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/global-style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<div id="header">
<?php require'header.php';?>
</div>
<!-- top-nav -->
<div id="top-menu">
<div class="row">
<?php require'top-nav-menu.php';?>
</div>
</div>
<!-- end nav -->
<!-- start banner--->
<div class="glob-banner">
<div class="row">
<?php require'slider.php'?>
</div>
</div>
<!-- end banner--->
<!-- text flash slider -->
<hr/>
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
  <legend>  <h3>Submit your queries</h3> </legend>
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
<p><img src="images/world.jpg"  width="100%" alt=""/></p>
<div class="quires-form">
<div>
<?php //require'recent-projects.php';?>
<p class="small"><span style="color:#000000;" class="glyphicon glyphicon-tasks"></span> <b>The domains, the R&D team of GTRO deals with:</b></p>
<ul class="quires-form-nav">
<li>Signal Processing</li>
<li>Image Processing</li>
<li>Wireless  Communications</li>
<li>Security and Networks</li>
<li>Power Electronics</li>
<li>Cloud Computing </li>
<li>Internet Based Applications</li>
<li>Railway Automation</li>
<li>Lab view</li>
<li>Motor Speed Controls</li>
<li>IEEE Projects & Software Projects</li>
<li>Power Line Carrier </li>
<li>Matlab Projects</li>
<li>E-Governance  & E-Learning Application</li>
<li>VLSI, VHDL  Projects</li>

  </ul>
</div>
</div>
</div>
<!-- end right content -->
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
