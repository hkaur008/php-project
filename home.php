<?php 
session_start();
if(!isset($_SESSION['username']))
{
   header("location:login.php");
}
?>
<html>
<body>
welcome to home page!!!

<br>
<a href="logout.php">logout</a>
</body>
</html>