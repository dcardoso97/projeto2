<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $nome=filter_input(INPUT_POST, 'nome') ;
    $email=filter_input(INPUT_POST, 'email') ;
    $nident=filter_input(INPUT_POST, 'nident') ;
    $datan=filter_input(INPUT_POST, 'datan') ;
    $tipo=filter_input(INPUT_POST, 'tipo') ;
    
    $inst0="Select * from utilizador where CC ='".$nident."' or Email='".$email."'";
    $result0=mysqli_query($conn,$inst0);
    $numlinhas1=mysqli_num_rows($result0);
    echo $numlinhas1;
       
    if ($numlinhas1 == 0)
    {
        echo $nome,',',$email,',',$nident,',',$datan,',',$tipo;
        $inst0="Insert INTO utilizador(idUtilizador, Nome, DataNascimento, Email, CC, Tipo) VALUES(' ','".$nome."','".$datan."','".$email."','$nident','".$tipo."')";   
        $result0=mysqli_query($conn,$inst0);
        $inst3="Select idUtilizador from utilizador where Nome='".$nome."'";
        $result0=mysqli_query($conn,$inst3);
        $result1=mysqli_fetch_row($result0);
		if ($tipo=="Professor"){
		$inst2="Insert into professor values ('".$result1[0]."','".$nome."')";   
       	
		}else if($tipo=="Aluno"){
			$inst2="Insert into alunos values ('".$result1[0]."','".$nome."')"; 
			
		}
		$result0=mysqli_query($conn,$inst2) ; 
        $inslogin="Insert into login values ('$result1[0]','".$email."','".$nident."','Sim')"; 
        $result0=mysqli_query($conn,$inslogin);
        $_SESSION['mensagem'] ="Formador inserido no sistema";
        header("Location:IndexAdmin.php");
    }
    else
    {
        $_SESSION['mensagem'] ="Formadador já no sistema";
        header("Location:IndexAdmin.php");
    }

?>