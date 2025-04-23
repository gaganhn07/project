<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['btnlogin']))
{
$uemail=test_input($_POST['uemail']);
$upassword=test_input($_POST['upassword']);



//mysql_connect("localhost", "root","");
session_start();
$conn=connectdb();

	$sql="Select * from register where remail= '".$uemail."' and rpass= '".$upassword."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				$_SESSION['UEMAIL']=$uemail;	
				$_SESSION['REMAIL']=$upassword;	
				}
				header("location: userdash.php");
	}
	else
	{
		//header("Location:login.html");
		echo'<script type="text/javascript">alert("Incorrect Username or Password");window.history.back(); </script>';
	
	}
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
