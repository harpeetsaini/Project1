<?php
session_start();
// require('functions.php');
require('mysqli_connect.php'); // Connect to the db.

// Make the query:
$q1 = "SELECT * FROM `books` WHERE `id` = {$_GET['id']}";
$r1 = @mysqli_query($mysqli, $q1); // Run the query.

if ($r1) { // If it ran OK, display the records.

	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r1, MYSQLI_ASSOC)) {
		$_SESSION['id'] = $row['id'];
		$_SESSION['bookName'] = $row['bookName'];
		$_SESSION['booksLeftInStore'] = $row['booksLeftInStore'];
		$_SESSION['bookPrice'] = $row['bookPrice'];
	}
	// echo "test";

	mysqli_free_result($r1);
	mysqli_close($mysqli);
	header("Location: addToCart.php");
}

?>
