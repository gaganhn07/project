<?php
session_start();
// error_reporting(0);
include 'dbconnect.php';
if(isset($_POST['adbtn']))
{
$aid=test_input($_POST['aid']);
$apassword=test_input($_POST['apassword']);

//mysql_connect("localhost", "root","");
$conn=connectdb();

	$sql="Select * from admin where aid= '".$aid."' and apassword= '".$apassword."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				
				$_SESSION['AID']=$aid;	
				$_SESSION['APASSWORD']=$apassword;	
				header("location: dindex.html");

	}
	else
	{
		//header("Location:admin.html");
		echo'<script type="text/javascript">alert("Incorrect Username or Password");window.history.back(); </script>';
	
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
