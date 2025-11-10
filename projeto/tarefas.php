<?php
    session_start();
    require('banco.php');

    if (isset($_POST['nome']) && $_POST['nome'] != ''){
        $tarefa = array();
        $tarefa['nome'] = $_POST['nome'];

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

        //$_SESSION['lista_tarefas'][] = $tarefa;
        salvarTarefa($tarefa);

        header("Location: template.php");

        exit();
    }

    if(isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    } else {
        $lista_tarefas = array();
    }

    $exibir_tabela = true;
?>