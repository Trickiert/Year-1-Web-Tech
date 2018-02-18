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
//Requests user infomation from the form on Findmore.html. 
//Uses shorthand coding in the form of tenerary If statements.

$fName = isset($_GET ["firstname"]) ? $_GET ["firstname"]:null; 

$lName = isset($_GET ["lastname"]) ? $_GET ["lastname"]:null;

$sex = isset($_GET ["sex"]) ? $_GET ["sex"]:null;

$Email = isset($_GET ["EmailAddress"]) ? $_GET ["EmailAddress"]:null;  
            
$telephone = isset($_GET ["Telephone"]) ? $_GET ["Telephone"]:null;
            
$mobile = isset($_GET ["Mobile"]) ? $_GET ["Mobile"]:null;
            
$postcode = isset($_GET ["Postcode"]) ? $_GET ["Postcode"]:null;
            
$contact = isset($_GET ["contact"]) ? $_GET ["contact"]:null;
            
$T&C = isset($_GET ['TermsAndConditons']) ? $_GET ['TermsAndConditons']:null;
?>
    
<h1> Your entered details: </h1>
<?php
//This next script will echo (return) the users details back to them on the webpage.
               
echo '<p>Your First Name is: $fName</p>';
echo '<p>Your Last Name is: $lName</p>';
echo '<p>Your Sex is: $sex</p>';
echo '<p>Your Email is: $email</p>';
echo 'p>Your Telephone Number is: $telephone</p>';
echo 'p>Your Mobile Number is: $mobile</p>';
echo 'p>Your Postcode is: $postcode</p>';
echo 'p>Your Contact details are: $contact </p>';
	
?>
            
<?php

//This section of code will ask a user for missing infomation if they have neglected to enter it and kill the current script to allow them to enter it.

//Postcode && No Postal Contact 

 if (empty($postcode) && $contact = 'Post' ) 
{
	 
die
    echo ('<p>Plese enter your postcode to receive postal updates.</p>\n');
	 
}

//Email && No Email Address

 if (empty($email) && $contact = 'Email') 
{
	 
die
    echo ('<p> Please enter your Email to receive Email updates.</p>/n');
	 
}


//SMS && No SMS Number

if (empty($mobile or $telephone) && $contact = 'SMS' ) 
{
	
die
    echo ('<p>Plese enter a phone number to receive SMS updates to your home phone or mobile.</p></n>');
	
}

else
	
echo '<p> Infomation not found </p>';
?>  

    
<?php
//This will add the user infomation entered into the form into the online database.

include 'database_conn.php'; //Includes the database login and connection command.

//TOTEST
$sql = 'INSERT INTO PCH_expressedInterest (firstname, lastname, sex, EmailAddress, Telephone, Mobile, Postcode, contact)';
?>

<?php
$SMSImage = '/PHP_Images/smartphone.png';
$EmailImage = '/PHP_Images/Email.png'
$PostalImage = '/PHP_Images/Post.png'

if (%contact = 'SMS')
{
echo %SMSImage;
}

if (%contact = 'Email')
{
echo %EmailImage;
}

if (%contact = 'Post')
{
echo %PostalImage;
}

else
echo '<p>Contact Info Not Found </p>';

<?

</body>
</html>