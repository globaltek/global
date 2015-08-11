<?php error_reporting(0);?>
<?php
session_start();

$RandomStr = md5(microtime());// md5 to generate the random string

$ResultStr = substr($RandomStr,0,6);//trim 5 digit 

$NewImage =imagecreatefromjpeg("images/captchaimage.jpg");//image create by existing image and as back ground 

$LineColor = imagecolorallocate($NewImage,233,239,239);//line color 
$TextColor = imagecolorallocate($NewImage, 20,20, 77);//text color-white

imageline($NewImage,1,1,40,40,$LineColor);//create line 1 on image 
imageline($NewImage,10,100,60,0,$LineColor);//create line 2 on image 

imagestring($NewImage, 6, 20, 10, $ResultStr, $TextColor);// Draw a random string horizontally 

$_SESSION['key'] = $ResultStr;// carry the data through session

header("Content-type: image/jpeg");// out out the image 

imagejpeg($NewImage);//Output image to browser 

?>
