<?php 
session_start();
$con=mysqli_connect('localhost','root','','userregistration');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['username']))
{$name=$_POST['username'];
$pass=$_POST['password'];

$s="select * from usertable where username='$name' && password='$pass' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{ 
    $_SESSION['username']=$name;
    header('location:home.php');
}
else{
    header('location:login.php');
}
}

?>