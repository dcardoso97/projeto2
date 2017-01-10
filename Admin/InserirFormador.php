<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="padding.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>

<body >
		<center><h2>Inserir User</h2></center>

<form method="POST" action="InserirFormadorDB.php">
    <label>Nome:</label>
    <input type="text" class="form-control"  name="nome"><br>
    <label>Data de Nascimento:</label>
    <input type="date" class="form-control" name="dataN"><br>
    <label>Email:</label>
    <input type="email" class="form-control" name="email"><br>
    <label>Numero de Identifica&ccedil;&atilde;o:</label>
    <input type="number" min=100000000 max=999999999  maxlenght=9 class="form-control"  name="nident" ><br>
    <label>Tipo:</label>
    <select id="tipo" name="tipo">
        <option value="Administrador">Administrador</option>
      <option value="Professor">Formador</option>
      <option value="Aluno">Formando</option>
    </select>
    <input type="Submit" onClick="return confirm('Deseja cotinuar?');" class="btn btn-success pull-right" value="Inserir">
</form>
            
 
 
</body>
</html>