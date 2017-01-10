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
	<body>	
		
	<div id="ecra" class="ecra">
            
			<div class="jumbotron">
				<?php
					if (isset($logout_message)) 
					{
						echo "<div class='message'>";
						echo $logout_message;
						echo "</div>";
					}
				?>
				<?php
					if (isset($message_display)) 
					{
						echo "<div class='message'>";
						echo $message_display;
						echo "</div>";
					}
				?>
            <div id="info" class="info">
            	 <div class="col-sm-6 col-md-4" style="background-color:transparant;">
                 	<div class="thumbnail">
                		<img src="img/img1.png">
                        <caption><center><h3>Diogo Cardoso</h3></center></caption>
                        <p>asdnasndas</p>
                	</div>
            	</div>
                <div class="col-sm-6 col-md-4" style="background-color:transparant;">
                 	<div class="thumbnail">
                		<img src="img/img1.png">
                        <caption><center><h3>Malam Djassi</h3></center></caption>
                         <p>asdnasndas</p>
                	</div>
            	</div>
                	<div class="col-sm-6 col-md-4" style="background-color:transparant;">
                 	<div class="thumbnail">
                		<img src="img/img1.png">
                		<caption><center><h3>Odacil Paulo</h3></center></caption>
                         <p>asdnasndas</p>
                    </div>
            		</div>
                </div>	
                    		<div class="container" id="container" style="position:fixed;">
                    <img src="img/img1.png" class="img-rounded"/>
                   	<center><h3>CINEL</h3></center>
                   	<form method="POST" action="ValidaLogin.php">
                        	<input type="text" name="username" id="username" class="form-control" placeholder="Nome de utilizador" >
                       		<input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                        	<center><button class="btn btn-default" type="submit" style="width:5em; margin-top:2%;">LOGIN</button></center>
						</form>
                   
						
                </div>
        
	<footer>
           			<div class="container">
           		<h3><span class="aval" style="bottom:10%;left:45%; position:fixed;"><u>Avalia&ccedil;&otilde;es</u></span></h3>
            	<div class="botoes">
  						<a id="fafb" class="btn btn-block btn-social btn-facebook">
                    		<span class="fa fa-facebook"></span>
                        </a>
                        <a id="fagoogle" class="btn btn-block btn-social btn-google" >
                    		<span class="fa fa-google"></span>
                        </a>

                </div>
               		 <a id="modal" style="color:blue;position:absolute;top:100%;right:20%;margin-top:1%;">sobre</a>   
                   </div>     
            	</footer>
             
		</div>
   </div>
        
	</body>
</html>