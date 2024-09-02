<?php
    // $mysqli = new mysqli("localhost:3307","root","","sistema");

    $conexao = mysqli_connect("localhost:3307","root","","usuarios");
    if (!$conexao) {
        die("Falhou ! Erro: " . mysqli_connect_error());
    }
    $mysqli_

?>