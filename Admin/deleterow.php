<?php
$conn= mysqli_connect("localhost","root","","proj") or die('Connection error!');;
if(isset($_GET['cod'])){
    echo $_GET['cod'];}
$query = "DELETE FROM produto WHERE cod_Produto =".$_GET['cod']."";
$result=mysqli_query($conn, $query) or die('Database error!');
    header('location:ListaProdutos.php');
?>