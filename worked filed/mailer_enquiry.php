<?PHP 
$to = "pavancabs@yahoo.in"; 
$tocus = $_POST['Email']; 
$subject = "Enquiry from www.pavantoursandtravels.com ";
$headers = "From:enquiry@pavantoursandtravels.com";
$forward = 1;
$location = "enquiry.php";

$date = date ("l, F jS, Y"); 
$time = date ("h:i A"); 
$msg = "Enquiry form details. It was submitted on $date at $time.\n\n"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
	foreach ($_POST as $key => $value) 
	{ 
		$msg .= ucfirst ($key) ." : ". $value . "\n"; 
	}
}
else 
{
	foreach ($_GET as $key => $value) 
	{ 
		$msg .= ucfirst ($key) ." : ". $value . "\n"; 
	}
}
mail($to, $subject, $msg, $headers); 
mail($tocus, $subject, $msg, $headers); 
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
	foreach ($_POST as $key => $value) 
	{ 
		if($key != 'key')
		{
			$$key =  ''; 
		}
	}
}

if ($forward == 1) 
{ 
$_SESSION['mail']="Thanks! For contacting us. We get back to you as soon as possible";
    header ("Location:$location"); 
} 
?>