<?php
    include 'banco.php';

    $exibir_tabela = false;

    if (isset($_GET['id'])) {
        $tarefa = array();
        $tarefa = buscarTarefa($_GET['id']);
        if (isset($_POST['nome']) && $_POST['nome'] != ''){
            $tarefa['nome'] = $_POST['nome'];
            $tarefa['id'] = $_GET['id'];

            if (isset($_POST['descricao'])) {
                $tarefa['descricao'] = $_POST['descricao'];
            } else {
                $tarefa['descricao'] = '';
            }

            if (isset($_POST['prazo'])) {
                $tarefa['prazo'] = $_POST['prazo'];
            } else {
                $tarefa['prazo'] = '';
            }

            if (isset($_POST['prioridade'])) {
                $tarefa['prioridade'] = $_POST['prioridade'];
            } else {
                $tarefa['prioridade'] = 3;
            }

            if (isset($_POST['concluida'])) {
                $tarefa['concluida'] = intval($_POST['concluida']);
            } else {
                $tarefa['concluida'] = 0;
            }
            editarTarefa($tarefa);
            header('Location: template.php');

            exit();
        }
    }
    
    include 'formulario.php';
?>