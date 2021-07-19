<?php
session_start();
include('conexao.php');
$conn=conectar();

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header("Location: login.php");
    exit();
}


$email = $_POST['email'];
$senha = MD5($_POST['senha']);

$query = $conn->prepare("SELECT id FROM users WHERE email = :e AND passwd = :s");

$query->bindValue(":e",$email);
$query->bindValue(":s",$senha);

$query->execute();

$row=$query->rowCount();

if($row == 1) {
    $_SESSION['usuario']=$email;
    header("Location: main.php");
    exit();
} else {
    $_SESSION['nao_autenticado']=true;
    header("Location: login.php");
    exit();
}
?>
