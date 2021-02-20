
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'task');

$item_sno=$_POST['item_sno'];
$order=$_SESSION['order_id'];

$sql="update order_log set quantity=quantity+1 where item_sno=$item_sno and order_id=$order";
$result=mysqli_query($con,$sql);

$sql="select price from menu where sno=$item_sno";
$result=mysqli_query($con,$sql);
$temp=mysqli_fetch_assoc($result);

$sql="update order_log set total=$temp[price]*quantity where item_sno=$item_sno and order_id=$order";
$result=mysqli_query($con,$sql);


$sql="select quantity from order_log where item_sno=$item_sno and order_id=$order";
$result=mysqli_query($con,$sql);
$temp=mysqli_fetch_assoc($result);

if(!$result)
{
	
	echo "error";
}
else
{
	echo  $temp['quantity'];
}
//echo $_SESSION['user_id'];
?>
