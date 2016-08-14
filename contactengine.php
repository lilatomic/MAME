<?php
 
$EmailFrom = "no-reply@parastorage.com"; // From email address
$EmailTo = "mame.president@mcgilleus.ca"; // Email address you want submitted forms to go to
$Subject = "Message from Website"; // subject line for emails
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Message = Trim(stripslashes($_POST['Message'])); 
 
// validation
$validationOK=true;
if (!$validationOK) {
  print "There has been an error, please make sure you entered a correct email address."; // You can edit this to your own error message
  exit;
}
 
// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "n";
 
// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
 
// redirect to success page 
if ($success){
  print "Thank you, your email has been sent! We will be in touch shortly!"; // You can edit this to your own success message
}
else{
  print "There has been an error, please make sure you have entered your details correctly."; // You can edit this to your own error message
}
?>