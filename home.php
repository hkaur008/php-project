<?php 
session_start();
if(!isset($_SESSION['username']))
{
   header("location:login.php");
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
welcome to home page!!!

<br><a href="profile.php">profile</a>
<a href="logout.php">logout</a>
</body>
</html>