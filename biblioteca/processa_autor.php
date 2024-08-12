<?php
    session_start();

    include_once 'nacionalidade.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $nacionalidade = $_POST['nacionalidade'];

        $autor = new Autor($nome, $nacionalidade, $ano);
    
        $_SESSION['autor'] = serialize($autor);
    
        $mensagen = "Autor cadastrado.";
    }

    $autor_recuperado = isset($_SESSION['autor']) ? unserialize($_SESSION['autor']) : null;

?>