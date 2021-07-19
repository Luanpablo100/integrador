<?php

    session_start();
    ob_start();

    include("conexao.php");
    $conn = conectar();

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    if(empty($id)){
  
        $_SESSION['msg'] = "<p style='color:f00'>Erro!Usuário não encontrado!</p>";
        header("Location: listar.php");

    }

    $query_curso = "SELECT id FROM courses WHERE id = $id LIMIT 1";

    $result_curso = $conn->prepare($query_curso);

    $result_curso->execute();

    if($result_curso->rowCount() != 0){
        // echo "Usuário encontrado! <br>";
        $query_del_curso = "DELETE FROM courses WHERE id = $id";

        $result_del_curso = $conn->prepare($query_del_curso);

        if($result_del_curso->execute()){

            $_SESSION['msg'] = "<p style='color:green'>O curso foi excluido com sucesso!</p>";
            header("Location: cursos.php");

        }else {
            $_SESSION['msg'] = "<p style='color:f00'>Não foi possível excluir o curso!</p>";
            header("Location: cursos.php");
        }
        
    } else {
        $_SESSION['msg'] = "<p style='color:f00'>Erro!Curso não encontrado!</p>";
        header("Location: cursos.php");
    }

?>