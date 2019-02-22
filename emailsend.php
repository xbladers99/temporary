<?php

$to= 'atikagarwal4@gmail.com';
$msg= "Thanks for new Registration.";
$subject="Email verification Student Mentorship program";
/*$headers .= "From: Mayank Patel";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From: Maynk Patel | Mentorship Program <info@studentmentorship.com>'."\r\n";
$ms.="<html></body><div><div>Dear Atik,</div></br></br>";
$ms.="<div style='padding-top:8px;'>Please click The following link For verifying and activation of your account</div>
<div style='padding-top:10px;'><a href='http://www.phpgurukul.com/demos/emailverify/email_verification.php?code=$activationcode'>Click Here</a></div>
<div style='padding-top:4px;'>Powered by <a href='phpgurukul.com'>phpgurukul.com</a></div></div>
</body></html>";*/
$body = 'This is a test email\n Hope you got it.';
$headers = 'From : atikagarwal007@gmail.com';
if(mail($to,$subject,$body,$headers))
{
	echo 'Email has been sent.'.$to;
}
else 
	echo 'There was an error sending th email';
	
?>