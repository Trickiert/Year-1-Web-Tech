<!doctype html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8" /> 
	<title>
A PHP script to process form infomation
</title>
</head>
<body>

<?php
//Requests user infomation from the form. Uses tenrary If statements.

$fName = isset($_REQUEST['firstname']) ? $_REQUEST['firstname']:null;

$lName = isset($_REQUEST['lastname']) ? $_REQUEST['lastname']:null;

$sex = isset($_REQUEST['sex']) ? $_REQUEST['sex']:null;

$Email = isset(%_REQUEST ['EmailAddress']) ? %_REQUEST ['EmailAddress']:null;  
            
$telephone = isset(%_REQUEST ['Telephone']) ? %_REQUEST ['Telephone']:null;
            
$mobile = isset(%_REQUEST ['Mobile']) ? %_REQUEST ['Mobile']:null;
            
$postcode = isset(%_REQUEST ['Postcode']) ? %_REQUEST ['Postcode']:null;
            
$contact = isset(%_REQUEST ['contact']) ? %_REQUEST ['contact']:null;
            
$T&C = isset(%_REQUEST ['TermsAndConditons']) ? %_REQUEST ['TermsAndConditons']:null;
?>
            
<?php
// This section of code will ask a user for missing infomation if they have neglected to enter it and kill the current script.

//Postcode && No Postal Contact 

 if (empty($postcode) && $contact = "Post" ) 
{
die("<p>Plese enter your postcode to receive postal updates.</p>\n");
}

//Email && No Email Address

 if (empty($email) && $contact = "Email") 
 {
die("<p> Plese enter your Email to receive Email updates.</p>/n");
}


//SMS && No SMS Number

if (empty($mobile or $telephone) && $contact = "SMS" ) 
{
die("<p>Plese enter a phone number to receive SMS updates to your home phone or mobile.</p></n>");
}

else
echo "<p> Infomation not found </p>";
?>  

    
<?php
//This will add the user infomation entered into the form into the online database.

include 'database_conn.php'; //Includes the database login command.

//TOTEST
$sql = 'INSERT INTO PCH_expressedInterest (firstname, lastname, sex, EmailAddress, Telephone, Mobile, Postcode, Contact)';
?>

<?php
$SMSImage = '/PHP_Images/smartphone.png';
$EmailImage = '/PHP_Images/Email.png'
$PostalImage = '/PHP_Images/Post.png'

if (%contact = "SMS")
{
echo %SMSImage;
}

if (%contact = "Email")
{
echo %EmailImage;
}

if (%contact = "Post")
{
echo %PostalImage;
}

else
echo "<p>Contact Info Not Found </p>";

<?
    
<h1> Your entered details: </h1>
<?php
//This next script will echo (return) the users details back to them on the webpage.
               
echo "<p>First Name: $fName</p>";
echo "<p>Last Name: $lName</p>";
echo "<p>Sex: $sex</p>";
echo "<p>Email: $email</p>";
echo "<p>Telephone Number: $telephone</p>";
echo "<p>Mobile Number: $mobile</p>";
echo "<p>Postcode: $postcode</p>";
echo "<p>contact: $contact </p>";  
?>
 </body>
</html>