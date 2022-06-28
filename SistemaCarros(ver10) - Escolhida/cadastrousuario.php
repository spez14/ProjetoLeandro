<?php
    //Incluir do arquivo de conexão com o banco de dados
    include "database.php";

    //Recuperar as informações do formulário

    /* 
      name
      password
      email
      tel
    */

    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];

    //String em SQL
    $sql = "INSERT INTO ads_vitor_motors_users (name, password, email, tel) 
    VALUES ('$name', '$password', '$email', '$tel')";

    //Realizar o cadastro no banco de dados
    if(mysqli_query($conexao,$sql))
    {
        header("Location: index.php");
    }
    else
    {
        echo "Falha ao cadastrar usuário";
    }

?>