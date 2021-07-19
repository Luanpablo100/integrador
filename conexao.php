<?php
function conectar() {
    try {
        $conn = new PDO('mysql:host=localhost; dbname=escolar', 'root', '');
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
        return $conn;
}
?>
