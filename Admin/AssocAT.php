<html>
<head>
       <?php
        header ('Content-type: text/html; charset=iso8859-15');
        ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
<div class="container" >
    <center style="margin-right: 20%;"><h2>Associar UFCD a Turma</h2></center>
  <div class="row">
    <div class="col-lg-9">
        <div class="panel-body">
            <div class="form-group">               
                <div class="header">
                    <br>
			<form method="POST" action="AssocATBD.php">
                                            <label style=" margin-top: 1%;display:inline-block;">Turma:</label>
						<?php
                                                $conn=mysqli_connect("localhost","root","","proj");
                                                $sql="select * from turmas";
                                                $result=mysqli_query($conn,$sql);
                                                echo "<select  class='form-control' name='selectT' style='width:20%;display:inline-block;'>";
                                                while ($row = mysqli_fetch_array($result)){
                                                    echo "<option value='" . $row ['idTurma'] ."'>".$row['DesignacaoTurma']."</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            
                                              <label style=" margin-top: 1%;margin-left: 45%;display:inline-block;">Alunos:</label>
						<?php
                                                $conn=mysqli_connect("localhost","root","","proj");
                                                $sql="select * from alunos";
                                                $result=mysqli_query($conn,$sql);
                                                echo "<select  class='form-control' name='selectA' style= width:20%;display:inline-block;'>";
                                                while ($row = mysqli_fetch_array($result)){
                                                    echo "<option value='".$row ['idAluno']."'>".$row['NomeAluno']."</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            

                                      
                                            <br><br>
                                            <center style="display:inline-block;margin-left:50%;"><input type="Submit" class="btn btn-primary pull-right" value="Associar"></center> 
                        </form>
                </div>
           </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>