<?php
session_start(); 
//deleting donor
include 'dbconnect.php';


if(isset($_GET['uno']))
{
	$mysqli=connectdb();
	$userid=test_input($_GET['uno']);
	$query = "delete from sell where uno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$userid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:aproduct.php");
}

if(isset($_GET['rno']))
{
	$mysqli=connectdb();
	$userid=test_input($_GET['rno']);
	$query = "delete from register where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$userid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:auserdetail.php");
}





if(isset($_GET['bno']))
{
	$mysqli=connectdb();
	$userid=test_input($_GET['bno']);
	$query = "delete from buy where bno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$userid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:abuydetail.php");
}



//delete feedback
if(isset($_GET['cemail']))
{
	$cemail=test_input($_GET['cemail']);
	$mysqli=connectdb();
	$query = "delete from contact where cemail=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$cemail);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewfeed.php");
}

//delete feedback
if(isset($_GET['uid']))
{
	$uid=test_input($_GET['uid']);
	$mysqli=connectdb();
	$query = "delete from feedback where uid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$uid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewfeedback.php");
}

//delete feedback
if(isset($_GET['cid']))
{
	$cid=test_input($_GET['cid']);
	$mysqli=connectdb();
	$query = "delete from cloth where cid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$cid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewcloth.php");
}

//deleting recievers
if(isset($_GET['recno']))
{
	$recno=test_input($_GET['recno']);
	$mysqli=connectdb();
	$query = "delete from registration where userid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$recno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewreciever.php");
}

//deleting feedback 

if(isset($_GET['userid']))
{
	$fno=test_input($_GET['userid']);
	$mysqli=connectdb();
	$query = "delete from feedback where userid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$userid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:view_feedback.php");
}

//deleting donations

if(isset($_GET['ano']))
{
	$ano=test_input($_GET['ano']);
	$mysqli=connectdb();
	$query = "delete from donations where ano=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$ano);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewdonationsadmin.php");
}

//requesting
if(isset($_GET['d_id']))
{
	
	$d_id=test_input($_GET['d_id']);
	$r_date=date('yy-m-d');
	$r_time=date('h:i:sa');
	$mysqli=connectdb();
	
	$query=" INSERT INTO d_request(userid,d_id,r_date,r_time) VALUES(?,?,?,?) ";
	$statement = $mysqli->prepare($query);
	$statement->bind_param('siss',$_SESSION['USERID'],$d_id,$r_date,$r_time);
	if($statement->execute())
	{
		echo '<script type="text/javascript"> window.location="home_r.html"; </script>';
	}
	else
	{
		 echo '<script type="text/javascript"> alert("Error In Request"); </script>';
	}
	
	
}
	
//deleting requests by recievers
	
if(isset($_GET['rno']))
{
	$rno=test_input($_GET['rno']);
	$mysqli=connectdb();
	$query = "delete from d_request where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$rno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewRequestedFood.php");
}
	
//deleting donated food

if(isset($_GET['did']))
{
	$d_id=test_input($_GET['did']);
	$mysqli=connectdb();
	$query = "delete from d_item where d_id=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$d_id);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:DonatedFood.php");
}
	
//deleting requests by donor
	
if(isset($_GET['rid']))
{
	$rno=test_input($_GET['rid']);
	$mysqli=connectdb();
	$query = "delete from d_request where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$rno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:RequestedFood.php");
}

	
//granting requests by donor
	
if(isset($_GET['grantid']))
{
	$grantid=test_input($_GET['grantid']);
	$mysqli=connectdb();
	
	$query1 = "update d_item set  dstatus=1 where d_id='".$grantid."'";
	$statement1 = $mysqli->prepare($query1);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement1->execute();

	
	$query = "update d_request set comment='This item is granted to you! Congrats... Please collect it.', status=1 where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$grantid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:RequestedFood.php");
}


//denying requests by donor
	
if(isset($_GET['denyid']))
{
	
	$denyid=test_input($_GET['denyid']);
	$mysqli=connectdb();

	$query = "update d_request set comment='This item is not granted to you! Sorry!!!', status=2 where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$denyid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:RequestedFood.php");
}

//deleting subscribtion

if(isset($_GET['sno']))
{
	$sno=test_input($_GET['sno']);
	$mysqli=connectdb();
	$query = "delete from subscribe where sno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$sno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewsubscribe.php");
}

//deleting other feedbacks

if(isset($_GET['no']))
{
	$no=test_input($_GET['no']);
	$mysqli=connectdb();
	$query = "delete from feedback where no=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$no);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewsubscribe.php");
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>