<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $selectT=filter_input(INPUT_POST, 'selectTeste');
    if (is_array($_POST['pergunta'])) {
    foreach($_POST['pergunta'] as $value){
      $inst0="Insert INTO teste_perguntas VALUES('$selectT','$value')";  
      $result0=mysqli_query($conn,$inst0);
    }
  } else {
    $value = $_POST['pergunta'];
    echo $value;
  }
  header("Location:IndexFormador.php");

?>