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
                    <center><h2>Instrutores</h2></center>
                       <div class="header">
                        <div class="table-responsive">
  <table class="table table-hover">
    <thead>
        <tr>
        <th><b>Id</b></th>
        <th><b>Nome</b></th>
        <th></th>
        <th></th>
        <!-- Add Instrutor -->
                    <script>     
                    function load_instrutor(){
                    document.getElementById("divinstrutor").innerHTML='<object width="100%" height="100%" type="text/html" data="InscricaoInstrutor.html"></object>';}
                    </script>
                    <!-- Load Produto -->
        <th><center><a data-toggle="modal" href="#myModal" onclick="load_instrutor()" ><span class="glyphicon glyphicon-plus"></span></a></center></th>
        <!-- Modal -->
  <div class="modal fade" id="myModal" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <b><center><h4 class="modal-title">Contratar Instrutor</h4></center></b>
        </div>
        <div id="divinstrutor" class="modal-body" style="height:90%;">
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
        <tr>
    </thead>
    <tbody>
        <?php
        if (!isset($_SESSION)){session_start();}
            $conn=mysqli_connect("localhost","root","","GymPombalense");
            
            $instS="Select IdInstrutor,Nome from instrutor";
            $query = mysqli_query($conn,$instS);
            while ($row = mysqli_fetch_row ($query)){
            echo "<tr>";
            echo "<td>".$row[0]."</td> ";
            echo "<td>".$row[1]."</td>";
                echo"<td></td>";
                ?>
                <td> <a onClick="return confirm('Tem a certeza que deseja prosseguir?');" href="deleteinstrutor.php?id=<?php echo $row[0]; ?>"><span class='glyphicon glyphicon-remove' style='color:#D00000'> </span></a></td>
                <td><a href="Info_Instrutor.php?id=<?php echo $row[0]; ?>"><span class='glyphicon glyphicon-user' style='color:#707070'> </span></a></td>

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


</body>
</html>