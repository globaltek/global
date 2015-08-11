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
<?php require'header.php'?>
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
<?php require'slider-home.php';?>
</div>
</div>
<!-- end banner--->
<!-- text flash slider -->
<hr/>
<div id="glo-text-slider">
<div class="row">
<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  <div class="carousel-inner">
    <div class="item active"><h2 class="text-center">Flexible solutions for your research needs</h2></div>
    <div class="item"> <h2 class="text-center">We are offering projects in various domains</h2></div>
    <div class="item"><h2 class="text-center">We successfully come across more research articles</h2></div>
<!--<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>-->
 </div>
</div>
</div>
</div>
<hr/>
<!-- end text flash slider -->
<!-- Global home page container -->
<div id="glo-home-container">
<div class="row">
<div class="col-md-3">
<div class="click-post">
<a href="#" class="btn  btn-lg btn-info active">Click here <span class="glyphicon glyphicon-user"></span></a>
<p>Post your Queries</p>
<hr />
<a href="#"><h5>Flexible solutions for your research needs <span class="glyphicon glyphicon-tint"></span></h5></a>
<p>Post your Queries</p>
<hr />
<!-- news & events -->
<div class="click-content-events">
<div class="click-content-events-head">
<h4><span class="glyphicon glyphicon-eye-close"></span> News & Events </h4>
<?php require'news-and-events.php';?>

</div>
</div>
<!-- news & events -->
</div>
</div>
<!-- side left -->
<!-- side middle content -->
<div class="col-md-6">
<div class="click-content">
<h4>Welcome to Global Tek Research Organization!!!</h4>
<p>Global Tek Research Organization is a leading provider of technology and Engineering solutions. We are a research & development organisation and support research scholar to forward their advanced research thinking by providing the codes & kits in all the research domains. We are powered with talented IT professionals across all areas of technology</p>
<p>Global Tek Research Organization is working with commitment in transforming effective solutions with passion of delivering great challenges through research and innovation. Global Tek provides high end responsibility with new concepts and leading the research scholars and industries with high end quality and performance.</p>
<h5><b>We Handle the following IEEE Research Papers and Journals</b></h5>
<p><img src="images/title.jpg"  width="100%" alt=""/></p>
</div>
</div>
<!-- end  middle content -->
<!-- right content -->
<div class="col-md-3">
<p><img src="images/world.jpg"  width="100%" alt=""/></p>
<div class="recnet-project">
<h4><span class="glyphicon glyphicon-folder-open"></span> &nbsp;Recent Projects </h4>
<p class="small">Nunc sollicitudin hendrerit nisi, et pretium ipsum interdum ut</p>
</div>
</div>
<!-- end right content -->
</div>
</div>
<hr />
<div id="footer">
<div class="row">
<!-- footer menu -->
<ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li> 
				<li><a href="#">About Us</a></li>
                <li><a href="#">Achievements</a></li>
				<li><a href="#">Research</a></li>
				<li><a href="#">Working Platform</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Site Map</a></li>
                
            </ul>
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
