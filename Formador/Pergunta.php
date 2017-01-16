<html>
<head>
       <?php
        header ('Content-type: text/html; charset=iso8859-15');
        ?>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
<div class="container" >
   
  <div class="row">
    <div class="col-lg-9">
        <div class="panel-body">
            <div class="form-group">
                <div class="header">
                     <center><h2>Pergunta:</h2></center>
                    <form method="POST" action="InserirPerguntaDB.php">
                        <label>Texto Pergunta:</label>
                        <input type="text" class="form-control"  name="nome"><br>
                        <label>Resposta Correcta</label>
                        <input type="text" class="form-control" name="correcta"><br>
                        <input type="Submit" onClick="return confirm('Deseja cotinuar?');" class="btn btn-success pull-right" value="Inserir">
                    </form>
                </div>
           </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>