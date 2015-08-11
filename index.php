<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Welcome to Global Tek Research Organization!!!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="css/global-style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<?php require'header.php'?>
<!-- top-nav -->
</div>
<div id="top-menu">
<div class="container">
<div class="row">
<?php require'top-nav-menu.php';?>
</div>
</div>
</div>


<!-- end nav -->
<!-- start banner--->
<?php require'slider-home.php';?>
<!-- end banner--->
<!-- text flash slider -->
<hr/>
<div class="container">
<div id="glo-text-slider">
<?php require'text-slider.php';?>
</div>
<hr/>
<!-- end text flash slider -->

<!-- Global home page container -->
<div id="glo-home-container">
<div class="row">
<div class="col-md-3">
<div class="click-post">

<style>
.html-popup {
    display: none;
}
.html-popup-style
{
width:100%;
}
</style>
<div class="tree">
    <div class="html-popup"><div class="html-popup-style"><a href="#"><img src="images/posturqueries.gif" border="0" ></a>
    </div>
    </div>
<a tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="bottom">
<img src="images/Click_Here_Button.png"></a>
</div>

<script>
$('.tree [data-toggle="popover"  ]').popover({
    html: true,
    content: function () {
        return $(this).prev().html();
    }
});
</script>

<hr />
<!-- news & events -->
<div class="click-content-events">
<div class="click-content-events-head">
<h4>News & Events </h4>
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
<h4>&nbsp;Recent Projects </h4>
<p class="small">Nunc sollicitudin hendrerit nisi, et pretium ipsum interdum ut</p>
</div>
</div>
<!-- end right content -->
</div>
</div>
<hr />
</div>
<div id="footer">
<?php require'footer.php';?>
</div>
<!-- end Global home page container -->


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
