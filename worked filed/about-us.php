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
 <legend>  <h3>About Us</h3> </legend>
 <div class="about-glo">
 <p>Global Tek Research Organization is a private and self-preserving society of illustrious scholars occupied in scientific and engineering research. The focusing of Global Tek Research Organization is to assist break through education in the update science and technology. The main objective is to promote research desire in newly emerging and boundary areas including the multidisciplinary domains namely Networking, VLSI, Image Processing and Power Electronics. </p>
 <p>Global Tek Research Organization comprises experts with massive experience in IT Research, Research Programming, Mathematical solutions. We focus on providing an excellent level of service to a manageable number of customers</p>
 <ul id="about-glo-nav">
 <li>	Maximize Good put</li>
 <li>	Improve customer satisfaction in quality and price levels</li>
 <li>	Minimize production cost</li>
 <li>	Quality and price levels</li>
 <li>	Automated process control and management</li>
 <li>	Eminence and qualified manpower</li>
 </ul>
 <h5>Guide / Assist you @ your campus: </h5>
 <ul id="about-glo-nav-p2">
 <li>	Plagiarism free Paper Writing</li>
 <li>	Research Domain finalization</li>
 <li>	Identifying haunting research problems</li>
 <li>	Proposing solutions for the identified issues</li>
 <li>	Documentation of research proposals</li>
 <li>	Submission of research for publication in International Journals</li>
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
<!-- embedded map-->

<!-- end embedded map-->
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
