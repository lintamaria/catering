<?php
include 'dbcon.php';
 session_start();
if(isset($_POST['submit']))
{
	
$a=$_POST["uname"];
$b=$_POST["psw"];
//echo($a);
//echo($b);
}
//INSERT INTO `login`(`login_id`, `reg_id`, `username`, `passsword`, `user_type`, `status`) VALUES

$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['login_id'];
	$rid=$row['reg_id'];
	
	//echo($i);
	//echo($rid);
	?>
	
	<?php
	
	if($a==$row['username']&&$b==$row['passsword']&&$row['user_type']=='user')
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='user';
		 $_SESSION["id"]=$i;
		 
		 $sql1="UPDATE `login` SET `status`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:userhome.php');
		 }
	elseif($a==$row['username']&&$b==$row['passsword']&&$row['user_type']=='admin')
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='admin';
		 $_SESSION['id']=$i;
		// echo($row['username']);
		 $sql1="UPDATE `login` SET `status`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		  header('location:admin_home.php');
		 }
		 
	else{
		echo "<script>if(confirm('Username and Password are incorrect!!!')){document.location.href='login.php'}else{document.location.href='index.php'};</script>";
	     }
		
	?>	
	
	<?php

}
?> 