
<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root"," ","proj");
    echo $resposta=$_POST['resposta'];
    
    $inst0="Select Resposta from aluno_teste ";
    $result0=mysqli_query($conn,$inst0);
    echo $numlinhas1=mysqli_num_rows($result0);
	//echo var_dump($_POST);
    if ($numlinhas1 == 0)
    {					
					
		 $resposta="Insert INTO aluno_teste(idResposta,RespostaCorreta) VALUES(' ','".$resposta."')";   
							
		if(!mysqli_query($conn,$inst3)){ 
			   echo 'erro :'. mysqli_error($conn);
		}else{
			   echo 'Linhas alteradas: '. mysqli_affected_rows($conn);
			}
		
		$_SESSION['mensagem'] ="Respostas enviadas";
		header("Location:Teste.php");
	}
?>
