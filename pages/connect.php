 <?php
	include('dbconnect.php');
?>
 <?php

$name = $_POST['nm'];
$email = $_POST['em'];
$message = $_POST['txtarea'];

$sql = "INSERT INTO contact (name, email, message) VALUES ('".$name."', '".$email."', '".$message."')";

if ($conn->query($sql) === TRUE) {

  	echo '<script language="javascript">';
	echo 'alert("Sucessfully Registered !!!")';
	echo '</script>';
	header("Location:contact.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

?> 