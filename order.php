
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'task');

$item_sno=$_POST['item_sno'];
$order=$_SESSION['order_id'];

$sql="select * from menu where sno=$item_sno";
$result=mysqli_query($con,$sql);
$temp=mysqli_fetch_assoc($result);
$price=$temp['price'];

$sql="insert into order_log values ($order,$item_sno,1,$price)";
$result=mysqli_query($con,$sql);

if(!$result)
{
	
	echo "error";
}
//echo $_SESSION['user_id'];
?>
