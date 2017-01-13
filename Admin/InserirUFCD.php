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
<script>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#input").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});
</script>
</head>

<body>
<div class="container" >
  <div class="row">
    <div class="col-lg-9">
        <div class="panel-body">
            <div class="form-group">
                <div class="header">
					<form method="POST" action="InserirUFCDBD.php">
                                            <label>UFCD</label>
						<input type="text" class="form-control" PlaceHolder="Inserir designacao da ufcd" name="ufcd"><br>
						<br>
                                                <input type="number" class="form-control" PlaceHolder="Inserir horas da ufcd" name="tempo"><br>
						<br>
						<input type="Submit" id="input" class="btn btn-success pull-right" value="Inserir" >
                	</form>
                </div>
           </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>