<?php
if (!isset($_SESSION)){session_start();}
    	$conn=mysqli_connect("localhost","root","","proj");
        $id=$_SESSION['id'];
        $userpost=filter_input(INPUT_POST, 'userpost') ;
        $pwpost=filter_input(INPUT_POST, 'pwpost') ;
        $ver="Select * from login where Username='".$userpost."'";
        $verresult=mysqli_query($conn,$ver);
        $vernum=mysqli_num_rows($verresult);  
        echo $vernum;
        echo $userpost;
        echo $pwpost;
        if($vernum<1){
            ECHO $id;
            $varUpd="UPDATE login SET Username='".$userpost."',Password='".$pwpost."',FirsLogin='Nao' WHERE idUtilizador='$id'"; 
            $result= mysqli_query($conn, $varUpd);
            $_SESSION['user']=$userpost;
            header("Location:index2.php");
        }
        else{
                     $_SESSION['mensagem']="Username já utilizado escolha outro ";
                     header("Location:UserandPassword.php");   
          }
        
       
?>