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
<div class="container">
  <div class="row">
    <div class="col-lg-9">
            <div class="panel-body">               
                <div class="page-header">
                    <center><h2>Ufcd</h2></center>
                       <div class="header">
                        <div class="table-responsive">
  <table class="table table-hover">
    <thead>
        <tr>
        <th><b>Id</b></th>
        <th><b>Nome</b></th>
        <th><b>Duracao</b></th>
        <!-- Add Turma -->
                    <script>     
                    function load_ufcd(){
                    document.getElementById("divufcd").innerHTML='<object width="100%" height="100%" type="text/html" data="InserirUFCD.php"></object>';}
                    </script>
                    <!-- Load Turma -->
        <th><center><a d href="#" data-target="#myModal2" data-toggle="modal" onclick="load_ufcd()" ><span class="glyphicon glyphicon-plus"></span></a></center></th>
  
        </tr>
    </thead>
    <tbody>
        <?php
        if (!isset($_SESSION)){session_start();}
            $conn=mysqli_connect("localhost","root","","proj");
            
            $instS="Select * from ufcd";
            $query = mysqli_query($conn,$instS);
            while ($row = mysqli_fetch_row ($query)){
            echo "<tr>";
            echo "<td>".$row[0]."</td> ";
            echo "<td>".$row[1]."</td>";
                ?>
                <td></td>
                <td></td>
                <td><a onClick="return confirm('Tem a certeza que deseja prosseguir?');" href="deleterowU.php?id=<?php echo $row[0];?>"> <button class='glyphicon glyphicon-remove' style='color:red;background-color:transparent;border: none;' ></button></a></td>

        <?php echo "</tr>";
            }
        ?>
    </tbody>
  </table>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Adicionar Ufcd</h4>
      </div>
        <div id="divufcd" class="modal-body" style="height:50%;">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
 
                </div>
            </div>
        
    </div>
    
   </div> 
</div>



</body>
</html>