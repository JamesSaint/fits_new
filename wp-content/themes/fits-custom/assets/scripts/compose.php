<?php 
// Hardcode Admin 's Email
$from="jamessaint77@gmail.com";

// Store the form values
$subject = $_POST ['subject'];
$message = $_POST ['message'];

// For Feedback
echo "From: " . $from . "<br/>";
echo "Subject: " . $subject . "<br/>";

// Open the db connection
include ("connect.php");

// Compose the TSQL
$query = "SELECT first_name, last_name email FROM mailinglist";

// Run the Query and store the result
$result  = mysqli_query ($dbc, $query) or die (mysqli_error($dbc));

while ($row = mysqli_fetch_array($result)) {
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$to = $row['email'];

	$msg = "Dear " . $first_name . "  " . $last_name . ",<br/>" . $message;
	mail ($to, $subject, $msg, 'From:' . $from);

	// More Feeback
	echo "Mail sent to: " . $to . "<br/>";
	echo $msg . "<hr/>";
}

// Simple confirmation
if (count ($result)>0) { 
	echo "<br/> You have successfully emailed your message";
} else {
	echo "<br/> Sorry, something went wrong!";
}

// Close the connection 
mysqli_close($dbc);
 ?>