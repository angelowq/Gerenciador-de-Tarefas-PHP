<?php

include 'banco.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    removerTarefa($id);
    header('Location: template.php');
    exit();
}

?>