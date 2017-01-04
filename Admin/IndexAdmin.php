<?php 
if (!isset($_SESSION))
{
     session_start();	 
}
$user= $_SESSION['username'];
?>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin.css">
	<head><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>CINEL</title>
		
	</head>

	<body>
		  <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0">
		  	
            </nav>
		 <div id="wrapper">
		 	   
		 	 <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="margin-left:0;">
                <li class="sidebar-brand">
                    
                        <a href="#menu-toggle"  id="menu-toggle" style="margin-top:20px;float:right;" > <i class="fa fa-bars " style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i> 
                    
                </li>
                <li>
                    <a href="InserirFormador.php"><i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;">Formadores</span>  </a>
                </li>
                <li>
                    <a href="#"> <i class="	fa fa-list " aria-hidden="true"> </i> <span style="margin-left:10px;"> Formandos</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-paste" aria-hidden="true"> </i> <span style="margin-left:10px;"> Avalia&ccedil;&otilde;es</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="	fa fa-unlink" aria-hidden="true"> </i> <span style="margin-left:10px;">Associar UFCD'S</span> </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-info-circle " aria-hidden="true"> </i> <span style="margin-left:10px;">INFO de Conta</span> </a>
                </li>
                 <li style="margin-top: 100%;">
                    <a href="Logout.php"><i class="fa fa-sign-out " aria-hidden="true"> </i> <span style="margin-left:10px;">Sair</span> </a>
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
   
       

    </body>
</html><!-- Meio-->