
<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'task');


$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=mysqli_real_escape_string($con,$_POST['password']);

$sql="select * from customer where email='$email' and password='$pass'";
$result=mysqli_query($con,$sql);

$temp=mysqli_fetch_assoc($result);
$_SESSION['email']=$temp['email'];
$_SESSION['name']=$temp['name'];

$sql="insert into log(email) values ('$email')";
$result=mysqli_query($con,$sql);

$sql="select * from log where email='$email'";
$result=mysqli_query($con,$sql);

$temp=mysqli_fetch_assoc($result);

if($result)
{
	$_SESSION['order_id']=$temp['order_id'];
	if(isset($_SESSION['order_id']))
	{
echo "<script>window.location.href = 'logged_index.php';</script>";
}
}
else
{
	echo "error";
}
//echo $_SESSION['user_id'];
?>
