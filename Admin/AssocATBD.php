<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $selectT=filter_input(INPUT_POST, 'selectT') ;  
    $selectA=filter_input(INPUT_POST, 'selectA') ;  
    echo $selectT;
    echo $selectA;
    $inst0="Select * from turmas_alunos where idAluno ='".$selectA."' and idTurma='".$selectT."'";
    $result0=mysqli_query($conn,$inst0);
    $numlinhas1= mysqli_num_rows($result0);
    if ($numlinhas1 == 0)
    {
        $instI="Insert INTO turmas_alunos VALUES('$selectT','$selectA')";   
        $result0=mysqli_query($conn,$instI);
    }
    else
    {
        $_SESSION['mensagem'] ="Associacao Concluida";
        header("Location:IndexAdmin.php");
    }
