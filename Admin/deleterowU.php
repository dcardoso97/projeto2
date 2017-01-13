<?php
$conn= mysqli_connect("localhost","root","","proj") or die('Connection error!');;
$query = "DELETE FROM ufcd WHERE idUfcd =".$_GET['id']."";
$result=mysqli_query($conn, $query) or die('Database error!');
header("Refresh:0; url=IndexAdmin.php");
?>