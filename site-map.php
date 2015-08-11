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
  <script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});
</script>
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
<div class="container">
<!-- start banner--->
<div class="glob-banner">
<div class="row">
<?php require'slider.php'?><br/>
</div>
</div>
<!-- end banner--->
<!-- text flash slider -->

<div id="glo-text-slider">
<?php require'text-slider.php';?>
</div>

<hr/>
<!-- end text flash slider -->
<!-- Global home page container -->
<div id="glo-home-container">
<div class="row">
<?php require'left-side.php';?>
<!-- side left -->
<!-- side middle content -->
<div class="col-md-6">
 <legend>  <h3>Sitemap</h3> </legend>
 <div class="sitemap">
 <ul class="sitemap-nav">
<li><a href="index.php" data-toggle="tooltip" data-original-title="Vist home page"> Home</a></li>
<li><a href="about-us.php" data-toggle="tooltip" data-original-title="See about Global Tek Research Organization"> About Us</a></li>
<li><a href="achievements.php" data-toggle="tooltip" data-original-title="See about Global Tek Research Organization"> Achievements</a></li>
<li><a href="research.php" data-toggle="tooltip" data-original-title="See about Global Tek Research Organization"> Research</a></li>
<li><a href="working-platform.php" data-toggle="tooltip" data-original-title="See about Global Tek Research Organization"> Working Platform</a></li>
<li><a href="contact-us.php" data-toggle="tooltip" data-original-title="See about Global Tek Research Organization"> Contact</a></li>
<li><a href="join-us-form.php" data-toggle="tooltip" data-original-title="See about Global Tek Research Organization"> Join US</a></li>
<li><a href="site-map.php" data-toggle="tooltip" data-original-title="See about Global Tek Research Organization"> Site Map </a></li>

 </ul>
 </div>
</div>
<!-- end  middle content -->
<!-- right content -->
<div class="col-md-3">
<p><img src="images/sitemap.jpg"  width="100%" alt=""/></p>
<div class="quires-form">
<div>
<?php require'recent-projects.php';?>


</div>
</div>
</div>
<!-- end right content -->
</div>
</div>
<!-- embedded map-->

<!-- end embedded map-->
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
