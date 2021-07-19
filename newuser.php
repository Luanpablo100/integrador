<?php

    session_start();


    include("conexao.php");
    $conn=conectar();

    $nome = $_POST['username'];
    $email = $_POST['useremail'];
    $senha = MD5($_POST['userpass']);
    $panel = $_POST['profile'];


    $cadastro = $conn->prepare("INSERT INTO users(
        nome, email, passwd, panel)
    VALUES(:nome, :email, :senha, :panel)");

    $cadastro->bindValue(":nome", $nome);
    $cadastro->bindValue(":email", $email);
    $cadastro->bindValue(":senha", $senha);
    $cadastro->bindValue(":panel", $panel);

    

    $verificar=$conn->prepare("SELECT * FROM users WHERE email=?");
    $verificar->execute(array($email));

    if($verificar->rowCount()==0):
        $cadastro->execute();
        $_SESSION["cadastrado"] = true;
        header("Location: cadastro.php");
        exit();
    else:
        echo "E-mail já cadastrado!";
        $_SESSION["nao_cadastrado"] = true;
        header("Location: cadastro.php");
        exit();
    endif;
?>