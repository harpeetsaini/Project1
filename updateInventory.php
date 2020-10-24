<?php
// Start the session
session_start();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require('mysqli_connect.php');
	$errors = false;

	if (empty($_POST['firstName'])) {
		echo "First Name: \n";
		$errors = true;
	} elseif (empty($_POST['lastName'])) {
		echo "Last Name: \n";
		$errors = true;
	} elseif (empty($_POST['payMode'])) {
		echo "Payment Method: \n";
		$errors = true;
	} else {
		$firstName = mysqli_real_escape_string($mysqli, $_POST['firstName']);
		$lastName = mysqli_real_escape_string($mysqli, $_POST['lastName']);
		$payMode = mysqli_real_escape_string($mysqli, $_POST['payMode']);

		$id = $_SESSION["id"];

		$q1 = "INSERT INTO `bookinventoryorder` (`firstName`, `lastName`, `id`) VALUES ('$firstName', '$lastName', '$id')";
		$newQuantity = (int)$_SESSION['booksLeftInStore'] - 1;
		$q2 = "UPDATE `books` SET `booksLeftInStore` = '$newQuantity' WHERE `id` = '$id'";
		$r1 = @mysqli_query($mysqli, $q1);
		$r2 = @mysqli_query($mysqli, $q2);


		if (mysqli_affected_rows($mysqli)) {
			$_SESSION = [];
			session_destroy();

			header("Location: index.php");
			// mysqli_free_result($r1);
		}
	}
}
?>