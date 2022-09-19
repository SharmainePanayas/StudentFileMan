<?php

require_once 'admin/conn.php';
$stud_no = $_POST['stud_no'];
$file_name = $_FILES['file']['name'];
$file_type = $_FILES['file']['type'];
$date = date("Y-m-d, h:i A", strtotime("+8 HOURS"));

$location = "files/".$stud_no."/".$file_name;
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 9999999999) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if(isset($_POST['save'])) {
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "csv") {
	echo '<script>alert("Sorry, only JPG, JPEG, PNG , PDF , DOCX & CSV files are allowed.")</script>';
  $uploadOk = 0;
}
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo '<script>alert("Sorry, only JPG, JPEG, PNG , PDF , DOCX & CSV files are allowed.")</script>';
// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		mysqli_query($conn, "INSERT INTO storage VALUES('', '$file_name', '$file_type', '$date', '$stud_no')") or die(mysqli_error());
		header('location: student_profile.php');
	} else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>