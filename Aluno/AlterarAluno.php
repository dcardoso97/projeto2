<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $id=$_POST['idUtilizador'];
    $email=$_POST['email'];
    
    $inst0=" Select Email from utilizador ";
    $result0=mysqli_query($conn,$inst0);
    $numlinhas1=mysqli_num_rows($result0);
    echo $numlinhas1;
       
    if ($numlinhas1 == 0)
    {
        $result0=mysqli_query($conn,$inst0);
        $inst3="Update utilizador where Email'".$email."'";
        $result0=mysqli_query($conn,$inst3);
        $result1=mysqli_fetch_row($result0);

        $_SESSION['mensagem'] ="Dado atualizado";
        header("Location:IndexAluno.php");
    }

?>