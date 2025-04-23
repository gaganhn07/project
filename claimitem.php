<?php 
session_start();
if(isset($_POST['btnbuy']))
{
$uno=test_input($_POST['uno']);
$bdate=date('d-m-y');


include 'dbconnect.php';
$mysqli=connectdb();

$query = "INSERT INTO buy(uno,bemail,bdate) VALUES(?,?,?)";
$statement = $mysqli->prepare($query);

//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('iss',$_SESSION['uno'],$_SESSION['UEMAIL'],$bdate);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Uniform claimed"); window.location="buyu1.php";</script>';
}
else
{
   echo '<script type="text/javascript">alert("Error...!"); window.location="buyu1.html";</script>';
}
$statement->close();
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
