<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body> 
<div class="container">
  <div class="row">
    <div class="col-lg-9">
            <div class="panel-body">               
                <div class="page-header">
                    <center><h2>Turmas</h2></center>
                       <div class="header">
                        <div class="table-responsive">
  <table class="table table-hover">
    <thead>
        <tr>
        <th><b>Id</b></th>
        <th><b>Nome</b></th>
        <th></th>
        <th></th>
        <!-- Add Turma -->
                    <script>     
                    function load_turmas(){
                    document.getElementById("divturmas").innerHTML='<object width="100%" height="100%" type="text/html" data="InserirTurma.php"></object>';}
                    </script>
                    <!-- Load Turma -->
        <th><center><a   data-toggle="modal" data-target="#myModal" onclick="load_turmas()" ><span class="glyphicon glyphicon-plus"></span></a></center></th>
  
        <tr>
    </thead>
    <tbody>
        <?php
        if (!isset($_SESSION)){session_start();}
            $conn=mysqli_connect("localhost","root","","proj");
            
            $instS="Select idTurma,DesignacaoTurma from turmas";
            $query = mysqli_query($conn,$instS);
            while ($row = mysqli_fetch_array ($query)){
            echo "<tr>";
            echo "<td>".$row['idTurma']."</td> ";
            echo "<td>".$row['DesignacaoTurma']."</td>";
                echo"<td></td>";
                ?>
                <td></td>
                <td></td>
                <td><a onClick="return confirm('Tem a certeza que deseja prosseguir?');" href="deleterowT.php?id=<?php echo $row['idTurma'];?>"> <button class='glyphicon glyphicon-remove' style='color:red;background-color:transparent;border: none;' ></button></a></td>

        <?php echo "</tr>";
            }
        
        ?>
    </tbody>
  </table>


</div>
 
                </div>
            </div>
        
    </div>
    
   </div> 
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Adicionar Turma</h4>
      </div>
        <div id="divturmas" class="modal-body" style="height:50%;">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>