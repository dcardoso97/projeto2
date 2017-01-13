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
                       
                        $var="Select * from utilizador where idUtilizador='".$result[0]."'";
                         $query=mysqli_query($conn,$var);
                         $result2= mysqli_fetch_row($query);
                         if ($result2[5]=="Administrador"){
                             header("Location:Admin/IndexAdmin.php");
                         }else  if ($result2[5]=="Aluno"){
                             header("Location:Aluno/IndexAluno.php");
                         } if ($result2[5]=="Professor"){
                             header("Location:Formador/IndexFormador.php");
                         }
                       
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