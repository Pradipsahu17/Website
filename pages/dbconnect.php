<?php
$host = "localhost";
$user = "postgres";
$pass = "pes";
$db = "website";
$con = pg_connect("host=$host dbname=$db user-$user password-$pass") or die("Could not connect to Server\n");

if (!$con){
echo "Error: Unable to open database\n";
} else{
	echo "Sucessfully connected."
	/*$name = $_POST['username']; 
	$password = $_POST['password'];
	$query = "INSERT INTO register(name, password) VALUES ('$name, $password')";
	$result = pg_query($con, Squery);
	header("Location: index.html");*/
}
pg_close($con);

/*
	$conn = pg_connect("host=localhost port=5432 dbname=website user=postgres password=pes");
	if ($conn)
	{
		echo "connected";
	}*/
 ?>