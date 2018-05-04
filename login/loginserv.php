<?php

$error = '';

if(isset($_POST['submit'])) {
	if(empty($_POST['user']) || empty($_POST['pass'])) {
		$error = "Användarnam eller lösenord är felaktigt. Försök igen";
	}else {
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$conn = mysqli_connect("localhost", "root", "");

		$db = mysqli_select_db($conn, "direktformedling_se");

		$query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");

		$rows = mysqli_num_rows($query);
		if($rows == 0) {
			header("location: welcome.php");
		}else {
			$error = "Användarnamn eller lösenord är felaktigt. Försök igen";
		}
		mysqli_close($conn);
	}
}

?>
