<?php
if (!isset($_SESSION)){session_start();}
    
    	$conn=mysqli_connect("localhost","root","","login");
    	$user=$_POST['username'];
		$pass=$_POST['password'];
		
		$var="Select username from login where BINARY username='".$user."' and BINARY password='".$pass."'";
		$result=mysqli_query($conn,$var);
		$resp=mysqli_num_rows($result);
		if($resp)
		{
			$_SESSION['username']=$user;
			header("Location:Admin/IndexAdmin.php");

		}
		 else 
		 {
				$data = array(
'				error_message' => 'Invalid Username or Password'
				);
				header("Location:http://localhost/projexemplo",$data);
		}
?>