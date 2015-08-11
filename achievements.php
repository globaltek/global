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
<!-- start banner--->
<div class="glob-banner">
<div class="container">
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
<div class="container">
<div class="row">
<?php require'left-side.php';?>
<!-- side left -->
<!-- side middle content -->
<div class="col-md-6">
 <legend>  <h3>Ahievements</h3> </legend>
 <div class="achievements-pg">
 <ul id="aheve-glo-nav">
 <li>	High quality services</li>
 <li>	Excellence core competence and technology</li>
 <li>	Customer Satisfaction</li>
 <li>	Qualified Innovation Management</li>
 <li>	Better Service Levels</li>
 </ul>
<p>With the hands on experience in the R&D filed, the Global Tek pleased to present a proposal for offering guidance & assistance services in the following areas of research. As well as we train you for research documentation and publication of research work in Thomson Reuters and Scopus Index journals.</p>

<p>The common goal of Global Tek research is to achieve technological superiority, improve efficiency and competitiveness. Consulting research desires with us can crash in the following ways: </p>

 <ul id="aheve-glo-nav-gr">
 <li>Develop capability in key aggressive areas or wounding edge technologies.</li>
 <li>Associate with specialists to increase novelty.</li>
 <li>Boost the capacity to focus on core competencies.</li>
 <li>Speeding moment to turn up</li>
 </ul>

 </div>
</div>
<!-- end  middle content -->
<!-- right content -->
<div class="col-md-3">
<p><img src="images/world.jpg"  width="100%" alt=""/></p>
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
