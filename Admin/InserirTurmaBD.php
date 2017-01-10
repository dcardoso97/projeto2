<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $turma=$_POST['nome'];
   
    $inst0="Select * from turmas where Designacao ='".$turma."'";
    $result0=mysqli_query($conn,$inst0);
    $numlinhas1=mysqli_num_rows($result0);
    echo $numlinhas1;
       
    if ($numlinhas1 == 0)
    {
       
        $inst0="Insert INTO turmas VALUES(' ','".$turma."')";   
        $result0=mysqli_query($conn,$inst0);
        header("Location:IndexAdmin.php");
    }
    else
    {
        $_SESSION['mensagem'] ="Turma já no sistema";
        header("Location:IndexAdmin.php");
    }

?>