<?php 
if(isset($_POST['cbtn']))
{

include 'dbconnect.php';
$cname=test_input($_POST['cname']);
$cemail=test_input($_POST['cemail']);
$csubject=test_input($_POST['csubject']);
$cmessage=test_input($_POST['cmessage']);
$cdate= date('d-m-y');


//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO contact(cname,cemail,csubject,cmessage,cdate) VALUES(?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('sssss',$cname,$cemail,$csubject,$cmessage,$cdate);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Feedback submited successfully!"); window.location="contact.html"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... in submiting feedback try again!"); window.location="contact.html"; </script>';
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
