<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
 echo   $email=$_POST['email'];
 echo "<br>";
 echo   $user=$_POST['user'];

	
 $inst0="Select Email from utilizador where Nome='".$user."'";
 $result0 = mysqli_query($conn,$inst0);
   $numlinhas1=mysqli_num_rows($result0);
	
	//echo $numlinhas1;
	//echo var_dump($_POST);
    if ($numlinhas1 > 0)
    {
  
		$inst3="Update utilizador set Email = '".$email."' where Nome='".$user."'";
		if(!mysqli_query($conn,$inst3)){ 
			   echo 'erro :'. mysqli_error($conn);
		}else{
			   echo 'Linhas alteradas: '. mysqli_affected_rows($conn);
			}
        //$query=mysqli_query($conn,$inst3);
        //$fetch=mysqli_fetch_row($query);
		
        $_SESSION['mensagem'] ="Dado atualizado";

		 header("Location:IndexAluno.php");
	}
?>
