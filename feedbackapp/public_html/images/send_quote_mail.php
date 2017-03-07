<?php

require_once 'include/MailManager.php';
require_once 'include/Constants.php';

// Form
$name = checkString($_POST["customer_name"]);
$email = checkString($_POST["customer_email"]);
$phone = checkString($_POST["customer_phone"]);
$message = checkString($_POST["customer_message"]);
$duration = checkString($_POST["dealine_duration"]);

$interest[] = array();

// Fields
if(isset($_POST["android_app"])){
	array_push($interest, "ANDROID");
}

if(isset($_POST["ios_app"])){
	array_push($interest, "iOS");

}
if(isset($_POST["static_webiste"])){
	array_push($interest, "STATIC WEBSITE");
}

if(isset($_POST["dynamic_website"])){
	array_push($interest, "DYNAMIC WEBSITE");
}

if(isset($_POST["windows_app"])){
	array_push($interest, "WINDOWS APP");
}

//echo " $is_android  - $is_ios - $is_static_website - $is_dynamic_webiste";

$mail = new MailManager();

// Body
$body = "<b>Name</b> : ".$name."<br>  <b>Email</b> : ".$email."<br>  <b>Phone</b> :". $phone ."<br> <b>Completion Time</b> :". $duration  ." Month <br> <b>Message</b> : ".$message  ." <br> <b>Intrested in</b> : ";
$body = $body.$interest[1]." ";
$body = $body.$interest[2]." ";
$body = $body.$interest[3]." ";
$body = $body.$interest[4]." ";
$body = $body.$interest[5]." ";

if($mail->SendMail(SALES_EMAIL, EMAIL_SUBJECT.$name, $body) == 0){

	//Successfully Sent
	$url = "http://greensyntax.co.in";
	header("Location:$url");
}
else{
	//Failed
	//echo "Error_MAIL";
}


function checkString($data){

	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	
	return $data;
}

?>
