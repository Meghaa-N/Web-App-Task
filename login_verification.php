<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'task');
$email=mysqli_real_escape_string($con,$_POST['em']);
$password=mysqli_real_escape_string($con,$_POST['password']);



$sql="select * from customer where Email='$email' and password='$password'";
$temp=mysqli_query($con,$sql);
$val=mysqli_num_rows($temp);
if($val==0){
	echo '0';
}
else
{
	echo '1';
}


?>
