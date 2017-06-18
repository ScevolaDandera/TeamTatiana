<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$sub = $_POST["subject"];
 
$EmailTo = "rashim900@gmail.com";
$Subject = "NodeScave | Support";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Sub: ".$sub;
$Body .= "\n"; 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>