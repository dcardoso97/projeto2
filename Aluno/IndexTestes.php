<?php 
if (!isset($_SESSION))
{
     session_start();	 
}
$user= $_SESSION['username'];
?>
<html>
	<head>
	<meta charset="ISO-8859-1"> 

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
		
		  <nav class="navbar navbar-minha  navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
		  		<a class="navbar-brand" href="#">Alunos</a>
		  		<div class="collapse navbar-collapse">
			  		<ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                        
	                        	<strong><?php echo $user;?></strong>
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
                    <a href="#"> <i class="fa fa-paste" aria-hidden="true"> </i> <span style="margin-left:10px;"> Avalia&ccedil;&otilde;es</span> </a>
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
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">                    
</a>  
      		<h1> Teste a realizar  </h1>
   		
   		<table class="table table-inverse">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Modulo</th>
		      <th>Data</th>
		      <th>Estado</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Integracao de sistemas</td>
		      <td>#</td>
		      <td>#</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>#</td>
		      <td>20/12/2016</td>
		      <td>#</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>#</td>
		      <td>#</td>
		      <td>Por fazer</td>
		    </tr>
		  </tbody>
	</table>
   
   
	 		<button type="button" class="btn btn-success"> Fazer Teste </button> 
 		
  
       		<legend >1. Indique a(s) alternativa(s) correta(s) e incorreta(s).</legend>
          		<div class="col-sm-10">
            		<div class="form-check">
            			<label class="form-check-label">
            				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            				a)O "drive" e um periférico de entrada
          				</label>
        		</div>
        			<div class="form-check">
         		<label class="form-check-label">
			            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			            O "scanner" é um periférico so de saida
          		</label>
			</div>
  			</div>
  			
  			<legend >2. Com relacao a Unidade Central de Processamento, julgue as afirmativas.</legend>
          		<div class="col-sm-10">
            		<div class="form-check">
            			<label class="form-check-label">
				            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
				            E composta exclusivamente pela Unidade deControle.
          				</label>
        			</div>
        			<div class="form-check">
	         			<label class="form-check-label">
	            			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
	            			E um dispositivo de entrada do computador
	          			</label>
					</div>
  			</div>
  			
			<legend >3. Com relacao aos Perifericos de Entrada e Saida doComputador, responda</legend>
          		<div class="col-sm-10">
            		<div class="form-check">
            			<label class="form-check-label">
            				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            					O Scanner e um dispositivo que permite capturar imagens de um documento trazendo-as para o computador.
          				</label>
        			</div>
        		<div class="form-check">
	         		<label class="form-check-label">
			        	    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			        	    O Monitor de Video Touch Screen e um dispositivo unicamente de entrada
	          		</label>
				</div>
  			</div>
  			
			<legend >4. Com relacao ao uso do teclado:</legend>
          		<div class="col-sm-10">
            		<div class="form-check">
           				 <label class="form-check-label">
				            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
				            a Tecla F1 no Word para Windows serve paraativar o programa de ajuda do Excel;
          				</label>
        		</div>
        	<div class="form-check">
	         	<label class="form-check-label">
		            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
	           		 se for pressionada a tecla SHIFT em conjuntocom a letra a, sempre aparecera como resposta (a maiusculo);
          		</label>
			</div>
  			</div>


    </body>
</html><!-- Meio-->