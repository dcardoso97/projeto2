<?php
if (!isset($_SESSION)){session_start();}
    $conn=mysqli_connect("localhost","root","","proj");
    $selectT=filter_input(INPUT_POST, 'selectTeste');
    $selectTurma=filter_input(INPUT_POST, 'selectTurma');
    $hinicio=filter_input(INPUT_POST, 'hinicio');
    $hfim=filter_input(INPUT_POST, 'hfim');
    $data=filter_input(INPUT_POST, 'data');
    $inst="select * from teste_turma where idturma= '$selectTurma' and Data ='".$data."' and HorasInicio='".$hinicio."'";
    $query= mysqli_query($conn, $inst);
    $row=mysqli_num_rows($query);
    if ($row>0){
        echo "nao pode";
    }else{
        $sql="Insert into teste_turma values('$selectT','$selectTurma','".$hinicio."','".$hfim."','".$data."')";
        $sqlquery=mysqli_query($conn,$sql);
        echo "teste inserido";
        
    }
?>