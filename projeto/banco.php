<?php
    $mysqli = new mysqli("db", "user", "password", "tarefas");
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        exit();
    }

    function buscarTarefa($id) {
        global $mysqli;
        $sqlBusca = 'SELECT * FROM tarefas WHERE id = ' . $id;
        $resultado = $mysqli->query($sqlBusca);
        return $resultado->fetch_assoc();
    }

    function salvarTarefa($tarefa) {
        global $mysqli;
        $sql = "INSERT INTO tarefas (nome, descricao, prazo, prioridade, concluida) VALUES ('{$tarefa['nome']}', '{$tarefa['descricao']}', NULLIF('{$tarefa['prazo']}', ''), '{$tarefa['prioridade']}', '{$tarefa['concluida']}')";
        $mysqli->query($sql);
        $mysqli->close();
        return true;
    }

    function editarTarefa($tarefa) {
        global $mysqli;
        $sql = "
            UPDATE tarefas SET
            nome = '{$tarefa['nome']}',
            descricao = '{$tarefa['descricao']}',
            prioridade = {$tarefa['prioridade']},
            prazo = '{$tarefa['prazo']}',
            concluida = {$tarefa['concluida']}
            WHERE id = {$tarefa['id']}
        ";
        $mysqli->query($sql);
        $mysqli->close();
        return true;
    }

    function removerTarefa($id) {
        global $mysqli;
        $sqlRemover = 'DELETE FROM tarefas WHERE id = ' . $id;
        $mysqli->query($sqlRemover);
        $mysqli->close();
        return true;
    }

?>