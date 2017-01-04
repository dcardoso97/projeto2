<?php
if (!isset($_SESSION)){session_start();}
   $con=mysqli_connect("localhost","root","","login") or die (mysql_error()); 
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sqlquery1="Select un,pw from login where BINARY un= '".$username."' and BINARY pw='".$password."'";
   $sqlexec1=mysqli_query($con,$sqlquery1);
   $sqlnumlinhas=mysqli_num_rows($sqlexec1);
   
   if ($sqlnumlinhas==0){header("Location:index.html");
   }
   if ($sqlnumlinhas==1){
	   echo "login existe<br>";
	   $_SESSION['us']=$username;
	   $password = $_POST['password'];
	    echo"<br>Login:";
	   echo $username;
	   echo"<br>Password:";
	   echo $password;
	  header("Location:indexAluno.html");
   }
?>