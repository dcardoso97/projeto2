<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $turma=filter_input(INPUT_POST, 'nome') ;  
    $inst0="Select * from turmas where DesignacaoTurma ='".$turma."'";
    $result0=mysqli_query($conn,$inst0);
    $numlinhas1= mysqli_num_rows($result0);
    echo $numlinhas1;

    if ($numlinhas1 == 0)
    {
        $inst0="Insert INTO turmas VALUES(' ','".$turma."')";   
        $result0=mysqli_query($conn,$inst0);
        Echo "<h3>Utilizador Inserido</h3>";
    }
    else
    {
        $_SESSION['mensagem'] ="Turma já no sistema";
        header("Location:IndexAdmin.php");
    }

?>