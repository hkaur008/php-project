<?php 
session_start();
$con=mysqli_connect('localhost','root','','userregistration');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$currentuser=$_SESSION['username'];

$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$_POST['email']=  mysqli_real_escape_string($con,$email);
$_POST['phone']=mysqli_real_escape_string($con,$phone);
$_POST['address']=mysqli_real_escape_string($con,$address);


$s="select * from userprofile where username='$currentuser'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{ 
   if($_POST['address']!=NULL)
   {
    $reg="update `userprofile` set home='$address' where username='$currentuser'";
    mysqli_query($con,$reg);
   }
   if($_POST['phone']!=NULL)
   {
    $reg="update `userprofile` set phone='$phone' where username='$currentuser'";
    mysqli_query($con,$reg);
   }
   if($_POST['email']!=NULL)
   {
    $reg="update `userprofile` set email='$email' where username='$currentuser'";
    mysqli_query($con,$reg);
   }
  echo " updated info";
}
else{$reg="insert into userprofile(username,home,phone,email) values('$currentuser','$address','$phone','$email')";
    mysqli_query($con,$reg);

    echo $currentuser;
    echo $address;
    echo $phone;
    echo $email;}

    echo "registration sucessfull";
?>