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
<!-- end text flash slider -->
<!-- Global home page container -->
<div id="glo-home-container">
<div class="row">
<?php require'left-side.php';?>
<!-- side left -->
<!-- side middle content -->
<div class="col-md-6">
 <legend>  <h3>Research</h3> </legend>
 <div class="research-pg">
 <p><b>The experts of Global Tek Research Organization include </b></p>
 <ul id="research-glo-nav">
 <li>Immensely experienced Mathematicians</li>
 <li>Researchers </li>
 <li>Programmer and Technical writers</li>
 <li>Proof Readers to promote innovative ideas and concepts</li>
 <li>Execute the fostered ideas and concepts</li>
 <li>Support mathematical models and documentation respectively</li>
 </ul>
<p>In addition to this, Global Tek Research Organization has an onboard lab which provides an underpinning support to the analysis, synthesis and simulation of multidisciplinary domains science and engineering courses with the aid of simulation tools. Global Tek published many technical solutions in various International Journals and shared knowledge on various topics. </p>
<p><b>Projects Undertaken:</b></p>

 <ul id="research-glo-nav-1">
 <li>Labview</li>
 <li>Matlab</li>
 <li>.Net</li>
 <li>Java</li>
 <li>VLSI & VHDL</li>
 <li>Mechatronics</li>
 <li>NS2</li>
 <li>Xilinx</li>
 <li>All IEEE and Non IEEE Projects </li>
 </ul>
 </div>
 <!--- simple -->
 <p><b>We Handle the following IEEE Research Papers and Journals</b></p>
 <p><img src="images/title.jpg"  width="100%" alt=""/></p>
  <!--- end simple -->
 </div>
<!-- end  middle content -->
<!-- right content -->
<div class="col-md-3">
<p align="center"><img src="images/research-title.jpg" alt=""  class="img-thumbnail"/></p>
<div class="quires-form">
<div>
<?php require'recent-projects.php';?>


</div>
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
