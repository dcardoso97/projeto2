<?php 
if (!isset($_SESSION))
{
     session_start();	
     $user =$_SESSION['username'];
}
?>
<html>
  <?php
  if (empty($_SESSION['username'])){
      header("Location:..\index2.php");
  }
  
  if (empty($_SESSION['mensagem']))
  {   
  }
  else
      {
  ?>
        <div id="mensagem" class="alert alert-info" style="float:right;width:20%;">
        <strong>Info!</strong> <?php echo $_SESSION['mensagem'];?>
        </div>
    <?php
    }
    ?>


	<head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="admin.css">
	<link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<title>CINEL</title>

	</head  >

        <body id="cont" style="max-width: 100%;
    overflow-x: hidden;">
            <div class="container" style="margin-left:15%;">
		  <nav class="navbar navbar-minha  navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
		  		<a class="navbar-brand" href="IndexAdmin.php">CINEL</a>
		  		<div class="collapse navbar-collapse"style="margin-top:1%;">
			  		<ul class="nav navbar-nav navbar-right"style="margin-right: 0%;">
                                            <img src="http://placehold.it/18x18" class="profile-image img-circle"/><font style="color:white;"> <?php echo $user;?> </font><b class="caret"></b>
                                            <a href="Logout.php" data-toggle="tooltip" title="Terminar Sessão"><i class="fa fa-sign-out" aria-hidden="true"> </i></a>    
                                        </ul>
	                   </div>
           </nav>
		 <div id="wrapper" >
		 	   
		 	 <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="margin-left:0;">
                <li class="sidebar-brand">
                    
                    
                </li>
               
                <li> 
                	 <script>  
                         function InserirFormadores() {
                          $('#meio2').load('InserirUser.php');
					return false;				
                         }
               </script>
                    <a href="#" onclick="return InserirFormadores();"><i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;">Inserir</span>  </a>
                </li>
                <li>
              <script>  
                         function Listar() {
                          $('#meio2').load('Listar.php');
				return false;					
                         }
               </script>
                     
                    <a href="#" onclick="return Listar();"> <i class="	fa fa-list " aria-hidden="true"> </i> <span style="margin-left:10px;"> Formandos</span> </a>
                </li>
                
                <li>     <script>  
                         function AssocAT() {
                          $('#meio2').load('AssocAT.php');
				return false;					
                         }
                        </script>
                    <a href="#" onclick="return AssocAT();"> <i class="fa fa-paste" aria-hidden="true"> </i> <span style="margin-left:10px;">Alunos/Turma</span> </a>
                </li>
                <li>
                            <script>  
                         function Assoc() {
                          $('#meio2').load('Assoc.php');
				return false;					
                         }
               </script>
                    <a href="#" onclick="return Assoc();"> <i class="	fa fa-unlink" aria-hidden="true"> </i> <span style="margin-left:10px;">UFCD'S/Turma</span> </a>
                </li>
                <li>
		               <script>  
		                         function ListarUfcd() {
		                          $('#meio2').load('ListaUfcds.php');
						return false;				
		                         }
		               </script>
                    <a href="#" onclick="return ListarUfcd();"> <i class="	fa fa-unlink" aria-hidden="true"> </i> <span style="margin-left:10px;">Criar UFCD'S</span> </a>
                </li>
                <li>
                	<script>  
                         function ListarTurmas() {
                          $('#meio2').load('ListaTurmas.php');
				return false;					
                         }
               </script> 
                    <a href="#" onclick="return ListarTurmas();"> <i class="	fa fa-unlink" aria-hidden="true"> </i> <span style="margin-left:10px;">Criar turma</span> </a>
                </li>
              

                   <li class="sidebar-brand">
                    
                        <a href="#menu-toggle"  id="menu-toggle" style="margin-top:20px;float:right;" > <i class="fa fa-bars " style="font-size:20px !Important;" ></i> </a>  
                    
                	</li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

 <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
       
        $("#wrapper").toggleClass("toggled");
     
    });
    </script>
        <!-- Page Content -->
                         

                      
                       <div id="meio12"  style="left:-5%;position:relative;width:100%;height:100%;margin:0 auto;" >
                           <div class='container' id="meio2" style="position:relative;top:10%;width:100%;height:50%;">
                           	<?php $conn=mysqli_connect("localhost","root","","proj");
			            $inst1="Select idUtilizador from login where Username='".$_SESSION['username']."'";
			            $query = mysqli_query($conn,$inst1);
                                    $row = mysqli_fetch_row ($query);
                                    $inst2="Select * from utilizador where idUtilizador='$row[0]'";
                                   $query = mysqli_query($conn,$inst2);
                                   $row = mysqli_fetch_row ($query);
                                    
                                    ?>
                           <!--cod page-->
                           <center>
                               <h1 style="margin-right: 15%;"> Os meus dados </h1>
     	 <br><br>
         		<div class="form-group row">
			  <div class="col-xs-10">
				  	  	
			  	  	<?php
					echo " <h4><label>$row[5]</label></h4>";
			  		?>
			</div>
                            
                            
                            
		</div>
   		<div class="form-group row">
		  <label for="example-text-input" class="col-xs-2 col-form-label">Nome:</label>
			  <div class="col-xs-10">
			  	<?php
                                    echo " <input  style='width: 400px;'  readonly class='form-control' type='text' value=".$row[1]." id='example-text-input'>";
			  	?>
			  </div>
		</div>

		<div class="form-group row">
		  <label for="example-date-input" class="col-xs-2 col-form-label">Data de Nascimento:</label>
			  <div class="col-xs-10">
			  		<?php
                                            echo " <input style='width: 400px;' readonly class='form-control' type='date' value=".$row[2]." id='example-text-input'>";
			  		?>
			 </div>
		</div>
		
		<div class="form-group row">
		  <label for="example-email-input" class="col-xs-2 col-form-label">Email:</label>
			  <div class="col-xs-10">
			  	<?php
                                    echo " <input   style='width: 400px;'  class='form-control' type='email' value=".$row[3]." id='example-text-input'>";
				?>
			  </div>
		</div>

		<div class="form-group row">
                    <label for="example-text-input" class="col-xs-2 col-form-label">Numero de identifica&ccedil;&atilde;o:</label>
			  <div class="col-xs-10">
			  	<?php

                                    echo " <input  style='width: 400px;'  readonly class='form-control' type='text' value=".$row[4]." id='example-text-input'>";

			  	?>
			 	  
			  </div>
		</div>
		
                          <!--/cod page-->        
                           </div><!--fecha div do meio -->
                       </div>
                 </div>
            </div>
                       
          
      
    </body>

</html><!-- Meio-->