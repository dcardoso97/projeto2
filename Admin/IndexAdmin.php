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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin.css">
	<link rel="stylesheet" href="navbar.css">
	<head><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>CINEL</title>

	</head>

	<body>
            <div class="container">
		  <nav class="navbar navbar-minha  navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
		  		<a class="navbar-brand" href="#">CINEL</a>
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
                	 <script>  
                         function InserirFormadores() {
                          $('#meio2').load('InserirFormador.php');
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
                <li>
                    <a href="#"> <i class="fa fa-paste" aria-hidden="true"> </i> <span style="margin-left:10px;"> Avalia&ccedil;&otilde;es</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="	fa fa-unlink" aria-hidden="true"> </i> <span style="margin-left:10px;">Associar UFCD'S</span> </a>
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
                         

                      
                       <div id="meio12" style="left:-5%;position:relative;width:100%;height:90%;margin:0 auto;" >
                           <div class='container' id="meio2" style="position:relative;top:10%;width:100%;height:50%;">
                           	
                           </div>
                       </div>
                       
          

    </body>

</html><!-- Meio-->