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
               <center><h2>Criar Teste</h2></center>
                <form method="POST" action="InserirTesteDB.php">
                       <label style=" margin-top: 1%;margin-left: 10%;display:inline-block;">Ufcd:</label>
						<?php
                                                 if (!isset($_SESSION)){session_start();}
                                                    $conn=mysqli_connect("localhost","root","","proj");
                                                    $sql="select * from ufcd";
                                                    $result=mysqli_query($conn,$sql);
                                                    echo "<select  class='form-control' name='selectUfcd' style= width:20%;display:inline-block;'>";
                                                    while ($row = mysqli_fetch_array($result)){
                                                        echo "<option value='".$row ['idUfcd']."'>".$row['Nome']."</option>";
                                                    }
                                                    echo "</select>";
                                                ?>
                       <br>
                       <br><p>
                    <button class="btn btn-success pull-right">Criar</button>
                </form>
                
                <div class="page-header">
                    
                
                    <center><h2>Testes</h2></center>
                       <div class="header">
                        <div class="table-responsive">
                            
                           
  <table class="table table-hover">
    <thead>
        <tr>
        <th><b>Id Teste</b></th>
        <th><b>UFCD</b></th>
        <th>Professor</th>
        <th></th>
        <!-- Add Instrutor -->
                    <script>     
                    function load_instrutor(){
                    document.getElementById("divT").innerHTML='<object width="100%" height="100%" type="text/html" data="InserirTurma.php"></object>';}
                    </script>
                    <!-- Load Produto -->
        <!-- Modal -->
  <div class="modal fade" id="myModal" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <b><center><h4 class="modal-title">Turma</h4></center></b>
        </div>
        <div id="divT" class="modal-body" style="height:90%;">
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
        <tr>
    </thead>
    <tbody>
        <?php
       
            
            $instS="Select * from teste";
            $query = mysqli_query($conn,$instS);
            $row= mysqli_fetch_row($query);
            
            
          while ($row3= mysqli_fetch_row($query))
            {
               $inst4="Select * from ufcd where idUfcd='$row3[1]'"; 
               $query4 = mysqli_query($conn,$inst4);
                while ($row2 = mysqli_fetch_row ($query4))
                        {
                          $inst5="Select * from professor where idProfessor='$row3[2]'";
                          $query5=mysqli_query($conn,$inst5);
                          while($row4= mysqli_fetch_row($query5)){
                            echo "<tr>";
                            echo "<td>".$row3[0]."</td>";
                            echo "<td>".$row2[1]."</td>";
                            echo "<td>".$row4[1]."</td>";
                                echo"<td></td>";
                                
                                
                                ?>

                                <td><a href="InserirTurma.php?id=<?php echo $row2[0]; ?>"><span class='glyphicon glyphicon-eye-open' style='color:#707070'> </span></a></td>

                        <?php echo "</tr>";
                          }
                        }
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


</body>
</html>
