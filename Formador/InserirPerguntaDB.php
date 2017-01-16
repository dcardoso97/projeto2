<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $nome=filter_input(INPUT_POST, 'nome') ;
    $correcta=filter_input(INPUT_POST, 'correcta') ;
    $inst0="Select * from perguntas where textoPerguntas='".$nome."'";
    $result0=mysqli_query($conn,$inst0);
    $numlinhas1=mysqli_num_rows($result0);
    if ($numlinhas1 == 0)
    {

        $inst0="Insert INTO perguntas VALUES('','".$nome."','".$correcta."')";   
        $result0=mysqli_query($conn,$inst0);
        $_SESSION['mensagem'] ="Pergunta inserida no sistema";
        header("Location:IndexFormador.php");
    }
    else
    {
        $_SESSION['mensagem'] ="Pergunta inserida anteirormente no sistema ";
        header("Location:IndexFormador.php");
    }

?>