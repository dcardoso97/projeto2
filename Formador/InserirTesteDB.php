<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $selectU=filter_input(INPUT_POST, 'selectUfcd');
    $nome=$_SESSION['username'];
    $inst1="select * from login where Username = '".$nome."'";
    $result1=mysqli_query($conn,$inst1);
    $num=mysqli_num_rows($result1);
    $row= mysqli_fetch_row($result1);
    $inst0="Insert INTO teste VALUES('','".$selectU."','".$row[0]."')";   
    $result0=mysqli_query($conn,$inst0);
    header("Location:AssocTestePergunta.php");


?>