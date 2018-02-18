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
//Requests user infomation from the form

        $fName = $_REQUEST['firstname'];
		$lName = $_REQUEST['lastname'];
		$sex = $_REQUEST['sex'];
        $Email = %_REQUEST ['EmailAddress']
        $telephone = %_REQUEST ['Telephone']
        $mobile = %_REQUEST ['Mobile']
        $postcode = %_REQUEST ['Postcode']
        $sex = %_REQUEST ['sex']
        $contact = %_REQUEST ['contact']
        $T&C = %_REQUEST ['TermsAndConditons']
?>
            


<?php
// This  section of code will ask a user for missing infomation if they have neglected to enter it.

//Postcode && No Postal Contact            
 if ($postcode = null && $contact = "Post" ) {
          echo "Plese enter your postcode to receive postal updates."
}
?>

<?php
//Email && No Email Address

 if ($email = null && $contact = "Email" ) {
          echo "Plese enter your Email to receive Email updates."
}
?>
 
<?php
//SMS && No SMS Number

 if ($mobile or $telephone = null && $contact = "SMS" ) {
          echo "Plese enter a phone number to receive SMS updates to your home phone or mobile."
}
?>  

    
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