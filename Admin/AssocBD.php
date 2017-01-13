<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $selectT=filter_input(INPUT_POST, 'selectT') ;  
    $selectU=filter_input(INPUT_POST, 'selectU') ;  
    $selectP=filter_input(INPUT_POST, 'selectP') ; 
    $inst0="Select * from turmas_ufcd where idTurmas_ufcd ='".$selectT."' and idUfcd='".$selectU."' and idProfessor='".$selectP."'";
    $result0=mysqli_query($conn,$inst0);
    $numlinhas1= mysqli_num_rows($result0);
    echo $numlinhas1;
       
    if ($numlinhas1 == 0)
    {
        $inst0="Insert INTO turmas_ufcd VALUES('$selectT','$selectU','$selectP')";   
        $result0=mysqli_query($conn,$inst0);
        
    }
    else
    {
        $_SESSION['mensagem'] ="Associacao Concluida";
        header("Location:IndexAdmin.php");
    }

?>