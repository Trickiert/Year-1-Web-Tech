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

</body>
</html>