<?php 
session_start();
if(isset($_POST['sbtn']))
{
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
  
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$suy=test_input($_POST['suy']);
$ssize=test_input($_POST['ssize']);
$scollege=test_input($_POST['scollege']);
$sprice=test_input($_POST['sprice']);
$sgender=test_input($_POST['sgender']);
$stype=test_input($_POST['stype']);
$sdate= date('d-m-y');


include 'dbconnect.php';
$mysqli=connectdb();

$query = "INSERT INTO sell(suy,ssize,scollege,sprice,supload,sgender,stype,sdate,uemail) VALUES(?,?,?,?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);

//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('sssssssss', $suy,$ssize,$scollege,$sprice,$target_file,$sgender,$stype,$sdate,$_SESSION['UEMAIL']);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Uniform listed in selling page sucessfully"); window.location="seller.html";</script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... in listing uniform in selling page!"); window.location="seller.html";</script>';
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
