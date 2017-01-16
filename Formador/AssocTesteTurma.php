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
   
   <div class="row">
       
    <div class="col-lg-9">
            <div class="panel-body">
                 <div class="page-header">
                          <div class="header">
                        <div class="table-responsive">
                <center><h2>Associar Teste a Turma</h2></center>
                <form method="POST" action="AssocTesteTurmaDB.php">
                       <label style=" margin-top: 1%;margin-left: 10%;display:inline-block;">Teste:</label>
						<?php
                                                 if (!isset($_SESSION)){session_start();}
                                                    $conn=mysqli_connect("localhost","root","","proj");
                                                    $sql2="select * from login where Username = '".$_SESSION['username']."'";
                                                    $result2=mysqli_query($conn,$sql2);
                                                    while ($row2 = mysqli_fetch_row($result2)){
                                                        $sql="select * from teste where idProfessor='$row2[0]'";
                                                        $result=mysqli_query($conn,$sql);
                                                        echo "<center><select  class='form-control' name='selectTeste' style= width:20%;display:inline-block;'>";
                                                        while ($row = mysqli_fetch_array($result)){
                                                            echo "<option value='".$row ['idTeste']."'>".$row['idUFCD']."</option>";
                                                        }
                                                    }
                                                    echo "</select></center>";
                                                ?>
                       <br>
                       <br>
                    
                
               
                            <label style=" margin-top: 1%;margin-left: 10%;display:inline-block;">Turma:</label>
                            <?php
                                                    $sql2="select * from login where Username = '".$_SESSION['username']."'";
                                                    $result2=mysqli_query($conn,$sql2);
                                                    $row= mysqli_fetch_row($result2);
                                                 
                                                    $sql="select * from turmas_ufcd where idProfessor = '$row[0]'";
                                                    $resultsql=mysqli_query($conn,$sql);
                                                    while ($row2 = mysqli_fetch_row($resultsql)){
                                                        $sql="select * from turmas where idTurma='$row2[0]'";
                                                        $result=mysqli_query($conn,$sql);
                                                        echo "<center><select  class='form-control' name='selectTurma' style= width:20%;display:inline-block;'>";
                                                        while ($row = mysqli_fetch_array($result)){
                                                            echo "<option value='".$row ['idTurma']."'>".$row['DesignacaoTurma']."</option>";
                                                        }
                                                    }
                                                    echo "</select></center>";
                                                ?>
                            <br><br>
                       <label style=" margin-top: 1%;margin-left: 10%;display:inline-block;">Horas de Inicio:</label>
                            <center><input type="time" class="form-control" name="hinicio" id="hinicio" style="width: 20%;display: inline-block;"/></center><br>
                            <label style=" margin-top: 1%;margin-left: 10%;display:inline-block;">Horas de Fim:</label>
                            <center><input type="time" class="form-control" name="hfim" id="hfim" style="width: 20%;display: inline-block;"/></center><br>
                            <label style=" margin-top: 1%;margin-left: 10%;display:inline-block;">Data:</label>
                            <center><input type="date" class="form-control" name="data" id="data" style="width: 20%;display: inline-block;"/></center>
                                                            
                            <button type="submit" class="btn btn-success pull-right">Associar</button>
                </form>               
</div>
 
                </div>
            </div>
           
    </div>
    
   </div> 
</div>


</body>
</html>
