<?php 
session_start();
$con=mysqli_connect('localhost','root','','userregistration');
header('location:login.php');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$name=$_POST['username'];
$pass=$_POST['password'];

$s="select * from usertable where username='$name' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{  echo "<br>";
    echo "user name already taken";
    $_SESSION['flag']="user name already taken";
}
else{
    $reg="insert into usertable(username,password) values('$name','$pass')";
    mysqli_query($con,$reg);
    echo "<br>";
    echo "registration sucessfull";
    $_SESSION['flag']="registration sucessfull";
}
?>