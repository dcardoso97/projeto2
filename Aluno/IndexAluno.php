<?php 


$conn=mysqli_connect("localhost","root","","proj");
			            
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



<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="aluno.css">
	<link rel="stylesheet" href="navbar.css">
	<!-- tabela -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	<!--tabela-->
	<head><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>CINEL</title>

	</head>

	<body>
            <div class="container">
		  <nav class="navbar navbar-minha  navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
		  		<a class="navbar-brand" href="#">ALUNO</a>
		  		<div class="collapse navbar-collapse">
			  		<ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                        
	                        	
	                        <span class="glyphicon glyphicon-chevron-down"></span>
	                    </a>
	                    <ul class="dropdown-menu">
	                        <li>
	                            <div class="navbar-login">
	                                <div class="row">
	                                    <div class="col-lg-4">
	                                        <p class="text-center">
	                                            <span class="glyphicon glyphicon-user icon-size"></span>
	                                        </p>
	                                    </div>
	                                    <div class="col-lg-8">
	                                        <p class="text-left"><strong>Nome Apelido</strong></p>
	                                        <p class="text-left">
	                                            <a href="#" class="btn btn-primary btn-block btn-sm"><i class="fa fa-info-circle " aria-hidden="true"> </i> <span style="margin-left:10px;">INFO de Conta</span> </a>
	                                        </p>
	                                    </div>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <div class="navbar-login navbar-login-session">
	                                <div class="row">
	                                    <div class="col-lg-12">
	                                        <p>
	                                            <a href="Logout.php" class="btn btn-danger btn-block"><i class="fa fa-sign-out " aria-hidden="true"> </i> <span style="margin-left:10px;">Sair</span></a>
	                                        </p>
	                                    </div>
	                                </div>
	                            </div>
	                        </li>
	                    </ul>
	                    </li>
	                    </ul>
	                   </div>
           </nav>
		 <div id="wrapper">
		 	   
		  <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="margin-left:0;">
                <li class="sidebar-brand">
                    
                    
                </li>
                <li>
                    <a href="IndexAluno.php"><i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;">HOME</span>  </a>
                </li>         
                <li>
                    <a href="ListarNotas.php"><i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;">Notas</span>  </a>
                </li>
                <li>
                    <a href="IndexTestes.php"> <i class="	fa fa-list " aria-hidden="true"> </i> <span style="margin-left:10px;"> Testes</span> </a>
                </li>
                <li>
                    <a href="Teste.php"> <i class="fa fa-paste" aria-hidden="true"> </i> <span style="margin-left:10px;"> Avalia&ccedil;&otilde;es</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="	fa fa-unlink" aria-hidden="true"> </i> <span style="margin-left:10px;">UFCD'S</span> </a>
                </li>

                   <li class="sidebar-brand">
                    
                        <a href="#menu-toggle"  id="menu-toggle" style="margin-top:20px;float:right;" > <i class="fa fa-bars " style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i> 
                    
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
 <script language="javascript">
<!--
function myFunction(a) {
    alert(a);
}
</script>
                         
</a>  
	<form action="AlterarAluno.php" method="POST">
        <br><br><br>
        	<?php $conn=mysqli_connect("localhost","root","","proj");
			            $inst1="Select * from login where Username='".$_SESSION['username']."'";
			            $query = mysqli_query($conn,$inst1);
                                    $row = mysqli_fetch_row ($query);
                                    $inst2="Select * from utilizador where idUtilizador='$row[0]'";
                                   $query = mysqli_query($conn,$inst2);
                                   $row = mysqli_fetch_assoc ($query);
                                    
                                    ?>
   		<center><h1> Os meus dados </h1></center>
     	 <br><br>
   		<div class="form-group row">
		  <label for="example-text-input" class="col-xs-2 col-form-label">Username:</label>
			  <div class="col-xs-10">
			  	<?php

					echo " <input  style='width: 400px;'  readonly class='form-control' type='text' value=".$row['Nome']." name='user' id='user'>";
			  	?>
			  </div>
		</div>

		<div class="form-group row">
		  <label for="example-date-input" class="col-xs-2 col-form-label">Data de Nascimento:</label>
			  <div class="col-xs-10">
			  		<?php
						echo " <input style='width: 400px;' readonly class='form-control' type='date' value=".$row['DataNascimento']." id='example-text-input'>";	
			  		?>
			 </div>
		</div>
		
		<div class="form-group row">
		  <label for="example-email-input" class="col-xs-2 col-form-label">Email:</label>
			  <div class="col-xs-10">
			  	<?php
					echo " <input style='width: 400px;' class='form-control' type='email' value=".$row['Email']." id='email' name='email'>";
			  	?>
			  </div>
		</div>

		<div class="form-group row">
		  <label for="example-text-input" class="col-xs-2 col-form-label">CC:</label>
			  <div class="col-xs-10">
			  	<?php
					echo " <input  style='width: 400px;'  readonly class='form-control' type='text' value=".$row['CC']." id='example-text-input'>";
			  	?>
			 	  
			  </div>
		</div>
		
		<div class="form-group row">
		  <label for="example-number-input" class="col-xs-2 col-form-label">Tipo:</label>
			  <div class="col-xs-10">  	
			  	<?php
					echo " <input  style='width: 400px;'  readonly class='form-control' type='text' value=".$row['Tipo']." id='example-text-input'>";
			  	?>
			</div>
		</div>
		
		<button type="submit" class="btn btn-success">Alterar</button> 
 		
 			</form>	
  
    </body>
</html><!-- Meio-->