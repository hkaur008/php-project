<?php 
session_start();
$con=mysqli_connect('localhost','root','','userregistration');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$currentuser=$_SESSION['username'];
$s="select * from userprofile where username='$currentuser'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{ echo "i foud it";

  $row=mysqli_fetch_assoc($result);
  printf("%s %s %d %s",$row['username'],$row['email'],$row['phone'],$row['home']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php")?>
<title>home</title>
<link href="css/home.css" rel="stylesheet" type="text/css">
</head>


<body>
welcome to profile  page!!!

<br><a href="createprofile.php">Edit profile</a>
<a href="logout.php">logout</a>
</body>
</html>