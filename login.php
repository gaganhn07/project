<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['btnlog']))
{
$demail=test_input($_POST['remail']);
$dpassword=test_input($_POST['rpass']);
$dphone=test_input($_POST['rphone']);
$dpassword=md5($dpassword);

//mysql_connect("localhost", "root","");
$conn=connectdb();

	$sql="Select * from register where remail= '".$remail."' , rpass= '".$rpass."' and rphone= '".$rphone."'" ;
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				$_SESSION['RNAME']=$row['rname'];	
				$_SESSION['REMAIL']=$row['remail'];
				$_SESSION['RPHONE']=$row['rphone'];	
				}
				header("location: ddashboard.php");
	}
	else
	{
		//header("Location:login.html");
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
