<!doctype html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8" /> 
	<title>
A PHP script to allow admin management of user info.
</title>
</head>
<body>


<?php
 //Requests user infomation from the form using sql and displays this to the webpage

include 'database_conn.php'; //Includes the database login command.

$sql = "SELECT expressInterestID, forename, surname, postalAddress, email FROM PCH_expressedInterest";

	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

      while ($row = mysqli_fetch_assoc($result)) {  //Sorts the retreived infomation into catagorised rows.
      	$expressInterestID = $row['ID'];
        $forename = $row['First Name'];
        $surname = $row['Second Name'];
	    $postalAddress = $row['Postal Address'];
        $email = $row['Email']; 
	
            echo "<div>$expressInterestID, $forename, $surname, $postalAddress,$email </div>"; //Echos the rows as a div to the webpage.
        }

 
	mysqli_free_result($result); 
    mysqli_close($conn);

<?

</body>
</html>