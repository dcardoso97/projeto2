<?php 
if (!isset($_SESSION))
{
     session_start();	
     $user =$_SESSION['username'];
     $id = $_SESSION['id'];
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="styles/styles.css" type="text/css" rel="stylesheet">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/prog.js"></script>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>CINEL</title>
</head>
        <body >
            
            <div class="container" style="background-color:#312a25;margin:0 auto;width:100%;height:50%;margin-top:10%;opacity:0.1;">
                  </div>
                
                    <div class="container"style="position:absolute;background-color:transparent; height:30%;top:30%;right:9%;">
          <!--form--> <form method="POST" action="alterar.php">
                            <center><h3>Defina os dados</h3></center> 
                            <center>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon" style="width: 50%; background-color:white">
                                    <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                </div>
                            </center>
                    <input type="text" id="userpost" name="userpost" class="form-control" placeholder="Novo Nome de utilizador" >
                    <input type="password" id="pwpost" name="pwpost" class="form-control" placeholder="Nova Senha">
                    <center><button class="btn btn-default" type="submit" style="width:5em; margin-top:2%;">Alterar</button></center>
       <!--/form-->  </form>
                        
                        <div class="container">
           		
            	<div class="botoes">
  						<a id="fafb" class="btn btn-block btn-social btn-facebook">
                    		<span class="fa fa-facebook"></span>
                        </a>
                        <a id="fagoogle" class="btn btn-block btn-social btn-google" >
                    		<span class="fa fa-google"></span>
                        </a>

                </div>
               		  
                   </div>  
          <?php
          if (empty($_SESSION['mensagem'])){
              echo "";
          }else{
              echo $_SESSION['mensagem'];
          }
          ?>
            </div>
	</body>
</html>