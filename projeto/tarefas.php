<?php
    session_start();

    function mostrarAtividades($lista_tarefas) {
        foreach ($lista_tarefas as $tarefa){
            echo '<tr>';
                echo "<td>{$tarefa['nome']}</td>";
                echo "<td>{$tarefa['descricao']}</td>";
                echo "<td>{$tarefa['prazo']}</td>";
                echo "<td>{$tarefa['prioridade']}</td>";
                echo "<td>{$tarefa['concluida']}</td>";
            echo '</tr>';
        }
    }

    if (isset($_GET['nome']) && $_GET['nome'] != ''){
        $tarefa = array();
        $tarefa['nome'] = $_GET['nome'];
        
        if (isset($_GET['descricao'])) {
            $tarefa['descricao'] = $_GET['descricao'];
        } else {
            $tarefa['descricao'] = '';
        }
        
        if (isset($_GET['prazo'])) {
            $tarefa['prazo'] = $_GET['prazo'];
        } else {
            $tarefa['prazo'] = '';
        }

        $tarefa['prioridade'] = $_GET['prioridade'];
        
        if (isset($_GET['concluida'])) {
            $tarefa['concluida'] = $_GET['concluida'];
        } else {
            $tarefa['concluida'] = '';
        }

        $_SESSION['lista_tarefas'][] = $tarefa;
    }

    if(isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    } else {
        $lista_tarefas = array();
    }
?>