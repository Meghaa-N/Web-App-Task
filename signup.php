<?php
session_start();
$i=0;
$flag=0;
$increment="select max(sno) m from customer";
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'task');
$check=mysqli_query($con,$increment);
if($check)
{
	$val = mysqli_fetch_assoc($check);
}
$i=$val['m']+1;
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$phno=mysqli_real_escape_string($con,$_POST['phno']);

$address=mysqli_real_escape_string($con,$_POST['address']);
$pass=mysqli_real_escape_string($con,$_POST['password']);


$sql="insert into log(email) values ('$email')";
$result=mysqli_query($con,$sql);

$sql="select * from log where email='$email'";
$result=mysqli_query($con,$sql);

$temp=mysqli_fetch_assoc($result);

if($result)
{
    $_SESSION['order_id']=$temp['order_id'];
    
}
else
{
    echo "error";
}


$sql="select * from customer where Email='$email'";
$temp=mysqli_query($con,$sql);
/*$result=mysqli_fetch_assoc($temp);*/
$val=mysqli_num_rows($temp);
if($val==0){
	$flag=0;
$reg="insert into customer(sno,name,email,phone,address,password) values($i,'$name','$email','$phno','$address','$pass')";

$h=mysqli_query($con,$reg);
if ($h) {
     $_SESSION['email']=$email;
     $_SESSION['name']=$name;
     $_SESSION['phone']=$phno;
     $_SESSION['user_id']=$i;
     header("location: logged_index.php");

	     	}
else {
    echo mysqli_error($con);
}
}
else
{
	$flag=1;
	 header("location: logged_index.php");
}

?>

