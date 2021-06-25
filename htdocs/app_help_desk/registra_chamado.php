<?php 

    session_start();

    //Tratando a configuração do arquivo antes de registrar.
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //Abrindo o arquivo, escrevendo no arquivo e fechando o arquivo.
    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php')





?>