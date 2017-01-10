<html>
<head>
       <?php
        header ('Content-type: text/html; charset=iso8859-15');
        ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="padding.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#alunos").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});
</script>
</head>

<body>
<div class="container" style="position: relative;">
  <div class="row">
    <div class="col-lg-9">
        <div class="panel-body">
            <div class="form-group">
                <div class="header">
					<form method="POST" action="InserirTurmaBD.php">
						<label>Designação da turma:</label>
						<input type="text" class="form-control" PlaceHolder="Inserir designacao da turma" name="nome"><br>
						<br>
						<input type="Submit" class="btn btn-success pull-right" value="Inserir" >
                	</form>
                </div>
           </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>