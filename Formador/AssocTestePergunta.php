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
<div class="container" style="position: relative; left:6%">
    <p><center><h2>Associar teste a pergunta</h2></center></p>
   <div class="row">
    <div class="col-lg-9">
            <div class="panel-body">
                
                <form method="POST" action="AssocTestePerguntaDB.php">
                       <label style=" margin-top: 1%;margin-left: 10%;display:inline-block;">Teste:</label>
						<?php
                                                 if (!isset($_SESSION)){session_start();}
                                                    $conn=mysqli_connect("localhost","root","","proj");
                                                    $sql2="select * from login where Username = '".$_SESSION['username']."'";
                                                    $result2=mysqli_query($conn,$sql2);
                                                    while ($row2 = mysqli_fetch_row($result2)){
                                                        $sql="select * from teste where idProfessor='$row2[0]'";
                                                        $result=mysqli_query($conn,$sql);
                                                        echo "<select  class='form-control' name='selectTeste' style= width:20%;display:inline-block;'>";
                                                        while ($row = mysqli_fetch_array($result)){
                                                            echo "<option value='".$row ['idTeste']."'>".$row['idTeste']."</option>";
                                                        }
                                                    }
                                                    echo "</select>";
                                                ?>
                       <br>
                       <br><p>
                    
                
                <div class="page-header">
                    
                
                    <center><h2>Perguntas</h2></center>
                       <div class="header">
                        <div class="table-responsive">
                            
                           
  <table class="table table-hover">
    <thead>
        <tr>
            <th><b>ID</b></th>
        <th><b>Pergunta</b></th>
        <th></th>
        <tr>
    </thead>
    <tbody>
        <?php
       
            
            $instS="Select * from perguntas";
            $query = mysqli_query($conn,$instS);

                          while($row4= mysqli_fetch_row($query)){
                            echo "<tr>";
                            echo "<td>".$row4[0]."</td>";
                            echo "<td>".$row4[1]."</td>";
                                echo"<td></td>";
                                ?>
                                <td><input type="checkbox" name="pergunta[]" id="<?php echo $row4[0]; ?>" value="<?php echo $row4[0]; ?>"></td>
                                <td><a href="InserirTurma.php?id=<?php echo $row2[0]; ?>"><span class='glyphicon glyphicon-eye-open' style='color:#707070'> </span></a></td>

                        <?php echo "</tr>";
                          }
        ?>
    </tbody>
  </table>
                         
</div>
 
                </div>
            </div>
           <button class="btn btn-success pull-right">Associar</button>
                </form>
    </div>
    
   </div> 
</div>


</body>
</html>
