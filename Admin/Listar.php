<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="padding.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>

<body>
    <br>
<center><h2>Utilizadores</h2></center>
    <div class="container">
  <table class="table table-responsive">
    <thead>
        <tr>
        <th><b>Id</b></th>
        <th><b>Nome</b></th>
        </tr>
    </thead>
    <tbody>
        <?php
            if (!isset($_SESSION)){session_start();}
                $conn=mysqli_connect("localhost","root","","proj");
                $instS="Select idProfessor,NomeProfessor from professor";
                $query = mysqli_query($conn,$instS);
            while ($row = mysqli_fetch_row ($query)){
                echo "<tr>";
                echo "<td>".$row[0]."</td> ";
                echo "<td>".$row[1]."</td>";
          ?>
                <td><button class='glyphicon glyphicon-remove' style='color:red;background-color:transparent;border: none;'  onClick="return confirm('Tem a certeza que deseja prosseguir?');" href="deleteinstrutor.php?id=<?php echo $row[0]; ?>"></button></td>
                <td><button data-toggle="modal" href="#mymodal" class='glyphicon glyphicon-user' style='background-color:transparent;border: none;'></button></td>
        <?php 
                echo "</tr>";}    
        ?>
    </tbody>
  </table>
        </div>
</body>
</html>