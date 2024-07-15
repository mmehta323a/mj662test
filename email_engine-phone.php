<?php


$name = Trim(stripslashes($_POST['name'])); 
/*$Tel = Trim(stripslashes($_POST['Tel'])); */
$email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

$emailFrom = $email ;
$emailTo = "support@beautifulclockradio.com";
/*$emailTo = "nguyenquituot86@gmail.com";*/

$Subject = "Beautiful Clock Radio Message";

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
/*$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";*/
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($emailTo, $Subject, $Body, "From: <$emailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=../index-phone.php?send=ok\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>