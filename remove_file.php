<?php
if (isset($_GET['store_id'])) {
	$id = $_GET['store_id'];
	mysqli_query($db, "DELETE FROM storage WHERE store_id=$store_id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: student_profile.php');
}
?>