<?php
$EmailFrom = Trim(stripslashes($_POST['email'])); 
$EmailTo = "crystalvisionweb2@gmail.com"; 
$Name = Trim(stripslashes($_POST['name'])); 
$Query= Trim(stripslashes($_POST['message']));
$ContactNo=Trim(stripslashes($_POST['phone']));
$Subject=Trim(stripslashes($_POST['subject']));


if($Name=="" || $EmailFrom=="" || $Query=="" || $Subject=="" || $ContactNo=="")
{
 
 header( 'Location: http://www.fcra.co.in/contact.php' );
 exit();
} 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Query: ";
$Body .= $Query;
$Body .= "\n";
$Body .= "Contact No: ";
$Body .= $ContactNo;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>

