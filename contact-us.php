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
<div class="container">
<!-- start banner--->
<div class="glob-banner">
<div class="row">
<?php require'slider.php'?><br />
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
<div class="contact-form">
<fieldset>
  <legend>  <h3>Contact Form</h3> </legend>
<!-- content here -->
  
				<form class="form-horizontal" role="form" method="post" action="">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
						
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
							
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"></textarea>
							
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					
				</form> 
				
				<!-- address -->
				<div class="active contact-form-radius">
				<h4>For any assistance in your research works kindly contact us</h4>
				<h5><span class="glyphicon glyphicon-home"></span> &nbsp;<b>Global Tek Research Organisation,</b></h5>
<h6>No - 16, CBM College Road,</h6>
<h6>Near Ayyapan Kovil Street,</h6>
<h6>Kovaipudur, </h6>
<h6>Coimbatore - 641042,</h6>
<h6><span class="glyphicon glyphicon-phone"></span> &nbsp;Phone: 09715808690, 09659440731</h6>
<h6><span class="glyphicon glyphicon-hand-up"></span>&nbsp; Mail ID: research.globaltek@gmail.com </h6>
<div class="spacer-div"></div>
</div>
</fieldset>
<!-- content here-->
</div>
</div>
<!-- end  middle content -->
<!-- right content -->
<div class="col-md-3">
<p><img src="images/contact.jpg"  width="100%" alt=""/></p>
<div class="quires-form">
<div>
<?php require'recent-projects.php';?>


</div>
</div>
</div>
<!-- end right content -->
</div>
</div><hr />
<!-- embedded map-->
<div id="em-map">
<iframe src="https://www.google.com/maps/d/u/0/viewer?mid=1g_mYw1_PPLCdXfN5glIEeh8aq4Q" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
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
