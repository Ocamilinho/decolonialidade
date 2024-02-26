<?php
session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) ){
    
    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM cadastro WHERE email='$email' LIMIT 1;";
    $sql_exec = $conexao->query($sql_code) or die($conexao->error);
    

    $usuario = $sql_exec->fetch_assoc();

   if(password_verify($senha, $usuario['senha'])){
    $_SESSION['email']= $email;
    $_SESSION['senha']=$senha;
    header('location:Gravações.php');
   }
   else{    
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:login.php?erro=dadoserrado');
   }

}


?>