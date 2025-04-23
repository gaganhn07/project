<?php 
if(isset($_POST['rbtn']))
{

	include 'dbconnect.php';
	$rname=test_input($_POST['rname']);
    $remail=test_input($_POST['remail']);
	$rphone=test_input($_POST['rphone']);
	$raddress=test_input($_POST['raddress']);
	$rpass=test_input($_POST['rpass']);
	$rcpass=md5($rcpass);
	$rdate= date('d-m-y');


//mysql_connect("localhost", "root","");
	$mysqli = connectdb();
	$sql="select * from register where remail='".$remail."'";
	$result=$mysqli->query($sql);
	if($result->num_rows>0)
	{
		echo '<script type="text/javascript">alert("Email  already exists. Please spcify another emailID.!"); window.history.back();</script>';
	}
	else
	{

	$query = "INSERT INTO register(rname,remail,rphone,raddress,rpass,rdate) VALUES(?,?,?,?,?,?)";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ssssss',$rname,$remail,$rphone,$raddress,$rpass,$rdate);



	if($statement->execute())
	{
		
		//sending mail
		$to = $remail;
		$subject = "instantuniform.com - Your Registration successfully done. ";
		$txt = "Hi! Your registration is done in instantuniform.com .Thank you Donor!!!";
		$headers = "From: instantuniform@gmail.com" . "\r\n" ."CC: ganeshnaik@gmail.com";
		mail($to,$subject,$txt,$headers);
		//mail ended
		echo '<script type="text/javascript">alert("Your registration is successfull!"); window.history.back(); </script>';
	}
	else
	{
	   echo '<script type="text/javascript">alert("Error... in Signing up Please try again!"); </script>';
	}
	$statement->close();
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
