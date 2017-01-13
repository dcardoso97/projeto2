<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $ufcd=filter_input(INPUT_POST, 'ufcd') ;  
    $tempo=filter_input(INPUT_POST, 'tempo') ;  
    $inst0="Select * from ufcd where Nome ='".$ufcd."'";
    $result0=mysqli_query($conn,$inst0);
    $numlinhas1= mysqli_num_rows($result0);
    echo $numlinhas1;
       
    if ($numlinhas1 == 0)
    {
        $inst0="Insert INTO ufcd VALUES(' ','".$ufcd."','$tempo')";   
        $result0=mysqli_query($conn,$inst0);
        
    }
    else
    {
        $_SESSION['mensagem'] ="ufcd já no sistema";
        header("Location:IndexAdmin.php");
    }

?>