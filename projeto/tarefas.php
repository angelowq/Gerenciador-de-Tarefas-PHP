<?php
    session_start();
    $mysqli = new mysqli("db", "user", "password", "tarefas");
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        exit();
    }
    
    function salvarTarefa($tarefa) {
        global $mysqli;
        $sql = "INSERT INTO tarefas (nome, descricao, prazo, prioridade, concluida) VALUES ('{$tarefa['nome']}', '" . intval($tarefa['descricao']) . "', '{$tarefa['prazo']}', '{$tarefa['prioridade']}', '" . intval($tarefa['concluida']) . "')";
        $mysqli->query($sql);
        $mysqli->close();
        return true;
    }

    function mostrarAtividades() {
        global $mysqli;
        $result = $mysqli->query("SELECT * FROM tarefas");
        while ($tarefa = $result->fetch_assoc()) {
            echo '<tr>';
                echo "<td>{$tarefa['nome']}</td>";
                echo "<td>{$tarefa['descricao']}</td>";
                echo "<td>{$tarefa['prazo']}</td>";
                echo "<td>{$tarefa['prioridade']}</td>";
                echo "<td>{$tarefa['concluida']}</td>";
            echo '</tr>';
        }
    }

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

        $tarefa['prioridade'] = $_POST['prioridade'];

        if (isset($_POST['concluida'])) {
            $tarefa['concluida'] = $_POST['concluida'];
        } else {
            $tarefa['concluida'] = '';
        }

        //$_SESSION['lista_tarefas'][] = $tarefa;
        salvarTarefa($tarefa);

        header('Location: template.php');
        exit();
    }

    if(isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    } else {
        $lista_tarefas = array();
    }
?>