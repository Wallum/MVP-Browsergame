<?php
$conn = mysqli_connect("localhost","root","","game");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



if (isset($_SESSION['id'])) {
	mysqli_query($conn,"UPDATE user_resources SET last_activity = ".time()." WHERE id = ".$_SESSION['id']);
}
else {
	session_start();
}

?>