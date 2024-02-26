<?php
  
  $nom = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
  
  $hash = password_hash($senha, PASSWORD_DEFAULT);

    
  include_once('config.php');

  $sql = mysqli_query($conexao, "SELECT * FROM cadastro WHERE email = '{$email}'");

  #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0){
        header('location:Cadastro.php?erro=email');
    }
    else{
    $result = "INSERT INTO cadastro
    VALUES (default, '$nom','$sobrenome', '$email', '$hash');";
  
    if(mysqli_query($conexao, $result)){
      header('location:Login.html');
    }
    else{
      echo "error:" .$result ."<br>". mysqli_error($conexao);
    }
  }
?>
