<html>
<head>

</head>
<?php
$conn= mysqli_connect("localhost","root","","proj");
if(isset($_GET['id'])){

    $sql="Select * from utilizador where idUtilizador ='".$_GET['id']."'";
    $sqlresult=mysqli_query($conn,$sql);
    ?>
    <div style="box-shadow: 10px 10px 5px #888888; border:2px solid #677786; margin:0 auto;  width: 25%; padding:20px;" >
    <?php

    while($row = mysqli_fetch_array($sqlresult)){
        echo"<font color='blue'><b>DADOS PESSOAIS:</b></font>";
        echo"<br>";
        echo"<br>";
        echo "<b>ID:</b>".$row[0];
        echo"<br>";
        echo "<b>Nome:</b>".$row[1];
        echo"<br>";
        echo "<b>Data de nascimento:</b>".$row[2];
        echo"<br>";
        echo "<b>Email:</b>".$row[3];echo"<br>";
        echo "<b>Numero de identificação</b>".$row[4];echo"<br>";
         echo "<b>Tipo:</b>".$row[5];echo"<br>";
        
        echo"<br>";
    }
    }
        ?>


    </div>
<a href="Listar.php" style="position:absolute; right:40%; bottom:40%;">Voltar</a>
</html>