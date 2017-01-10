<?php
if (!isset($_SESSION)){session_start();}
    
    	$conn=mysqli_connect("localhost","root","","proj");
    	$user=filter_input(INPUT_POST, 'username') ;
	$pass=filter_input(INPUT_POST, 'password') ;
		$var="Select Username from login where BINARY Username='".$user."' and BINARY Password='".$pass."'";
		$result=mysqli_query($conn,$var);
		$resp=mysqli_num_rows($result);
                
		if($resp>0)
		{
                    $_SESSION['username']=$user;
                    $var="select * from login where Username='".$user."'";
                    $query=mysqli_query($conn,$var);
                    $result= mysqli_fetch_row($query);
                    $_SESSION['id']=$result[0];
                    if($result[3]=="Sim")    
                    {
                       header("Location:UserandPassword.php");
                       
                    }else{
                       
                        header("Location:Admin/IndexAdmin.php");
                    }
			
                

		}
		 else 
		 {
				echo"nao";
				//header("Location:http://localhost/proj/index2.php");
                                    echo $user;
                echo $pass;
                echo $resp;
		}
?>