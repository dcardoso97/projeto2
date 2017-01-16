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
                    <center><h2>Turmas Associadas</h2></center>
                       <div class="header">
                        <div class="table-responsive">
  <table class="table table-hover">
    <thead>
        <tr>
        <th><b>Id</b></th>
        <th><b>Designacao</b></th>
        <th></th>
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
        if (!isset($_SESSION)){session_start();}
            $conn=mysqli_connect("localhost","root","","proj");
            
            $instS="Select * from login where Username = '".$_SESSION['username']."'";
            $query = mysqli_query($conn,$instS);
            $row= mysqli_fetch_row($query);
            $inst="SELECT idTurmas_ufcd FROM turmas_ufcd WHERE idProfessor='$row[0]'";
            $query2 = mysqli_query($conn,$inst);
            while ($row3= mysqli_fetch_row($query2))
            {
               $inst4="Select * from turmas where idTurma='$row3[0]'"; 
               $query4 = mysqli_query($conn,$inst4);
                while ($row2 = mysqli_fetch_row ($query4))
                        {
                            echo "<tr>";
                            echo "<td>".$row2[0]."</td>";
                            echo "<td>".$row2[1]."</td>";
                                echo"<td></td>";
                                ?>

                                <td><a href="InserirTurma.php?id=<?php echo $row2[0]; ?>"><span class='glyphicon glyphicon-eye-open' style='color:#707070'> </span></a></td>

                        <?php echo "</tr>";
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